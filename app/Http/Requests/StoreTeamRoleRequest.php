<?php

namespace App\Http\Requests;

use App\Models\TeamRole;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTeamRoleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('team_role_create');
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
