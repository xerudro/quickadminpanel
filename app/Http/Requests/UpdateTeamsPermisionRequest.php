<?php

namespace App\Http\Requests;

use App\Models\TeamsPermision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeamsPermisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('teams_permision_edit');
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
