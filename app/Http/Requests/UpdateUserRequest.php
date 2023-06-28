<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|unique:users,email,'.$this->user()->id.'|email',
            'password' => 'sometimes|max:12',
            'role_id' => 'required|string'
        ];
    }
}
