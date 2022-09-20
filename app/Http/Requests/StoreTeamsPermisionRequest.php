<?php

namespace App\Http\Requests;

use App\Models\TeamsPermision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTeamsPermisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('teams_permision_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}
