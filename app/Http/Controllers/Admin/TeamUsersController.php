<?php

namespace App\Http\Controllers\Admin;

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
use Yajra\DataTables\Facades\DataTables;

class TeamUsersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('team_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TeamUser::with(['roles', 'team'])->select(sprintf('%s.*', (new TeamUser())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'team_user_show';
                $editGate = 'team_user_edit';
                $deleteGate = 'team_user_delete';
                $crudRoutePart = 'team-users';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('roles', function ($row) {
                $labels = [];
                foreach ($row->roles as $role) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $role->title);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('adress', function ($row) {
                return $row->adress ? $row->adress : '';
            });
            $table->editColumn('phone_number', function ($row) {
                return $row->phone_number ? $row->phone_number : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });

            $table->editColumn('approved', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->approved ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'roles', 'approved']);

            return $table->make(true);
        }

        $roles = Role::get();
        $teams = Team::get();

        return view('admin.teamUsers.index', compact('roles', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('team_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $teams = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.teamUsers.create', compact('roles', 'teams'));
    }

    public function store(StoreTeamUserRequest $request)
    {
        $teamUser = TeamUser::create($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.team-users.index');
    }

    public function edit(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $teams = Team::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $teamUser->load('roles', 'team');

        return view('admin.teamUsers.edit', compact('roles', 'teamUser', 'teams'));
    }

    public function update(UpdateTeamUserRequest $request, TeamUser $teamUser)
    {
        $teamUser->update($request->all());
        $teamUser->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.team-users.index');
    }

    public function show(TeamUser $teamUser)
    {
        abort_if(Gate::denies('team_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamUser->load('roles', 'team');

        return view('admin.teamUsers.show', compact('teamUser'));
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
