<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamUserRequest;
use App\Http\Requests\UpdateTeamUserRequest;
use App\Http\Resources\Admin\TeamUserResource;
use App\Models\TeamUser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamUsersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('team_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamUserResource(TeamUser::with(['roles', 'team'])->get());
    }

    public function store(StoreTeamUserRequest $request)
    {
        $teamUser = TeamUser::create($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return (new TeamUserResource($teamUser))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamUserResource($teamUser->load(['roles', 'team']));
    }

    public function update(UpdateTeamUserRequest $request, TeamUser $teamUser)
    {
        $teamUser->update($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return (new TeamUserResource($teamUser))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamUser->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
