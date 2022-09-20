<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'surname' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'adress' => [
                'string',
                'required',
            ],
            'phone_number' => [
                'string',
                'required',
            ],
            'company' => [
                'string',
                'nullable',
            ],
        ];
    }
}
