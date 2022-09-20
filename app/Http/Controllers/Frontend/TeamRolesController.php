<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTeamRoleRequest;
use App\Http\Requests\StoreTeamRoleRequest;
use App\Http\Requests\UpdateTeamRoleRequest;
use App\Models\Permission;
use App\Models\Team;
use App\Models\TeamRole;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamRolesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('team_role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamRoles = TeamRole::with(['permissions', 'team'])->get();

        $permissions = Permission::get();

        $teams = Team::get();

        return view('frontend.teamRoles.index', compact('permissions', 'teamRoles', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('team_role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::pluck('title', 'id');

        return view('frontend.teamRoles.create', compact('permissions'));
    }

    public function store(StoreTeamRoleRequest $request)
    {
        $teamRole = TeamRole::create($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return redirect()->route('frontend.team-roles.index');
    }

    public function edit(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::pluck('title', 'id');

        $teamRole->load('permissions', 'team');

        return view('frontend.teamRoles.edit', compact('permissions', 'teamRole'));
    }

    public function update(UpdateTeamRoleRequest $request, TeamRole $teamRole)
    {
        $teamRole->update($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return redirect()->route('frontend.team-roles.index');
    }

    public function show(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamRole->load('permissions', 'team');

        return view('frontend.teamRoles.show', compact('teamRole'));
    }

    public function destroy(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamRole->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamRoleRequest $request)
    {
        TeamRole::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
