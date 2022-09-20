<?php

namespace App\Http\Requests;

use App\Models\TeamUser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTeamUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('team_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:team_users,id',
        ];
    }
}
