<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRoleRequest;
use App\Http\Requests\UpdateTeamRoleRequest;
use App\Http\Resources\Admin\TeamRoleResource;
use App\Models\TeamRole;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamRolesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('team_role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamRoleResource(TeamRole::with(['permissions', 'team'])->get());
    }

    public function store(StoreTeamRoleRequest $request)
    {
        $teamRole = TeamRole::create($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return (new TeamRoleResource($teamRole))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamRoleResource($teamRole->load(['permissions', 'team']));
    }

    public function update(UpdateTeamRoleRequest $request, TeamRole $teamRole)
    {
        $teamRole->update($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return (new TeamRoleResource($teamRole))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamRole->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
