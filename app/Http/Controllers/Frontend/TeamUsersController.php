<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTeamUserRequest;
use App\Http\Requests\StoreTeamUserRequest;
use App\Http\Requests\UpdateTeamUserRequest;
use App\Models\Role;
use App\Models\Team;
use App\Models\TeamUser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamUsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('team_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamUsers = TeamUser::with(['roles', 'team'])->get();

        $roles = Role::get();

        $teams = Team::get();

        return view('frontend.teamUsers.index', compact('roles', 'teamUsers', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('team_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $teams = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.teamUsers.create', compact('roles', 'teams'));
    }

    public function store(StoreTeamUserRequest $request)
    {
        $teamUser = TeamUser::create($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return redirect()->route('frontend.team-users.index');
    }

    public function edit(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $teams = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teamUser->load('roles', 'team');

        return view('frontend.teamUsers.edit', compact('roles', 'teamUser', 'teams'));
    }

    public function update(UpdateTeamUserRequest $request, TeamUser $teamUser)
    {
        $teamUser->update($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return redirect()->route('frontend.team-users.index');
    }

    public function show(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamUser->load('roles', 'team');

        return view('frontend.teamUsers.show', compact('teamUser'));
    }

    public function destroy(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamUser->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamUserRequest $request)
    {
        TeamUser::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
