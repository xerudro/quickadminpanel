<?php

namespace App\Http\Requests;

use App\Models\Company;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_create');
    }

    public function rules()
    {
        return [
            'company' => [
                'string',
                'required',
            ],
            'adress' => [
                'string',
                'required',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'required',
            ],
            'category' => [
                'string',
                'nullable',
            ],
        ];
    }
}
