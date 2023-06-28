<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'detail' => 'required|string',
            'amount' => 'required|numeric',
            'registry_date' => 'required|date',
            'user_loader' => 'required|string',
            'type_id' => 'required|integer',
            'user_id' => 'required|integer'
        ];
    }
}
