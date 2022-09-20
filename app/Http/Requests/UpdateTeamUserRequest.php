<?php

namespace App\Http\Requests;

use App\Models\TeamUser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeamUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('team_user_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'adress' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'min:13',
                'max:20',
                'required',
            ],
            'email' => [
                'required',
                'unique:team_users,email,' . request()->route('team_user')->id,
            ],
        ];
    }
}
