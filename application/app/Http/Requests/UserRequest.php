<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|min:6|string',
            'name' => 'required|min:6|string',
            'password' => 'required|min:4|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'O campo e-mail é obrigatório',
            'name.required'    => 'O campo nome é obrigatório',
        ];
    }
}
