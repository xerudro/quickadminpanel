<?php

namespace App\Http\Controllers\Admin;

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
use Yajra\DataTables\Facades\DataTables;

class TeamRolesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('team_role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TeamRole::with(['permissions', 'team'])->select(sprintf('%s.*', (new TeamRole())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'team_role_show';
                $editGate = 'team_role_edit';
                $deleteGate = 'team_role_delete';
                $crudRoutePart = 'team-roles';

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
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('permissions', function ($row) {
                $labels = [];
                foreach ($row->permissions as $permission) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $permission->title);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'permissions']);

            return $table->make(true);
        }

        $permissions = Permission::get();
        $teams       = Team::get();

        return view('admin.teamRoles.index', compact('permissions', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('team_role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::pluck('title', 'id');

        return view('admin.teamRoles.create', compact('permissions'));
    }

    public function store(StoreTeamRoleRequest $request)
    {
        $teamRole = TeamRole::create($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return redirect()->route('admin.team-roles.index');
    }

    public function edit(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $permissions = Permission::pluck('title', 'id');

        $teamRole->load('permissions', 'team');

        return view('admin.teamRoles.edit', compact('permissions', 'teamRole'));
    }

    public function update(UpdateTeamRoleRequest $request, TeamRole $teamRole)
    {
        $teamRole->update($request->all());
        $teamRole->permissions()->sync($request->input('permissions', []));

        return redirect()->route('admin.team-roles.index');
    }

    public function show(TeamRole $teamRole)
    {
        abort_if(Gate::denies('team_role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamRole->load('permissions', 'team');

        return view('admin.teamRoles.show', compact('teamRole'));
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
