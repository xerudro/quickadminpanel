<?php

namespace App\Http\Requests;

use App\Models\TeamRole;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeamRoleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('team_role_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'permissions.*' => [
                'integer',
            ],
            'permissions' => [
                'required',
                'array',
            ],
        ];
    }
}
