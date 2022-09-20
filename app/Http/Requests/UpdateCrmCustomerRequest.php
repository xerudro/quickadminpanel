<?php

namespace App\Http\Requests;

use App\Models\CrmCustomer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrmCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crm_customer_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'facebook_profile' => [
                'string',
                'nullable',
            ],
            'whatsapp_number' => [
                'string',
                'nullable',
            ],
            'skype' => [
                'string',
                'nullable',
            ],
            'website' => [
                'string',
                'nullable',
            ],
        ];
    }
}
