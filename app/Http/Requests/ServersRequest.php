<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'server_name' => 'bail|required|unique:servers|max:255', 
            'server_status' => 'required', 
            'server_type' => 'required', 
            'os_name' => 'required', 
            'os_version' => 'required', 
            'ip_address' => 'required', 
            'location' => 'required',
        ];
    }
}
