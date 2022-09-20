<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTeamsPermisionRequest;
use App\Http\Requests\StoreTeamsPermisionRequest;
use App\Http\Requests\UpdateTeamsPermisionRequest;
use App\Models\Team;
use App\Models\TeamsPermision;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TeamsPermisionsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('teams_permision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TeamsPermision::with(['team'])->select(sprintf('%s.*', (new TeamsPermision())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'teams_permision_show';
                $editGate = 'teams_permision_edit';
                $deleteGate = 'teams_permision_delete';
                $crudRoutePart = 'teams-permisions';

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

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $teams = Team::get();

        return view('admin.teamsPermisions.index', compact('teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('teams_permision_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.teamsPermisions.create');
    }

    public function store(StoreTeamsPermisionRequest $request)
    {
        $teamsPermision = TeamsPermision::create($request->all());

        return redirect()->route('admin.teams-permisions.index');
    }

    public function edit(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->load('team');

        return view('admin.teamsPermisions.edit', compact('teamsPermision'));
    }

    public function update(UpdateTeamsPermisionRequest $request, TeamsPermision $teamsPermision)
    {
        $teamsPermision->update($request->all());

        return redirect()->route('admin.teams-permisions.index');
    }

    public function show(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->load('team');

        return view('admin.teamsPermisions.show', compact('teamsPermision'));
    }

    public function destroy(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamsPermisionRequest $request)
    {
        TeamsPermision::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
