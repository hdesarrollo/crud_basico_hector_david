<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepositoBancarioRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'beneficiario' => 'required|string|max:50',
            'concepto' => 'required|string|max:50',
            'valor' => 'required|numeric|min:1'
        ];
    }
}
