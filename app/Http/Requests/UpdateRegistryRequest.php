<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegistryRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'detail' => 'required|string',
            'amount' => 'required|numeric',
            'registry_date' => 'required|date',
            'type_id' => 'required|integer'
        ];
    }
}
