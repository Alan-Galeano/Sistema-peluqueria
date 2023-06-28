<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRegistryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dateFrom' => 'sometimes|date',
            'dateTo' => 'sometimes|date'
        ];
    }
}
