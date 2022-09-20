<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTeamsPermisionRequest;
use App\Http\Requests\StoreTeamsPermisionRequest;
use App\Http\Requests\UpdateTeamsPermisionRequest;
use App\Models\Team;
use App\Models\TeamsPermision;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamsPermisionsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('teams_permision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermisions = TeamsPermision::with(['team'])->get();

        $teams = Team::get();

        return view('frontend.teamsPermisions.index', compact('teams', 'teamsPermisions'));
    }

    public function create()
    {
        abort_if(Gate::denies('teams_permision_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.teamsPermisions.create');
    }

    public function store(StoreTeamsPermisionRequest $request)
    {
        $teamsPermision = TeamsPermision::create($request->all());

        return redirect()->route('frontend.teams-permisions.index');
    }

    public function edit(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->load('team');

        return view('frontend.teamsPermisions.edit', compact('teamsPermision'));
    }

    public function update(UpdateTeamsPermisionRequest $request, TeamsPermision $teamsPermision)
    {
        $teamsPermision->update($request->all());

        return redirect()->route('frontend.teams-permisions.index');
    }

    public function show(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->load('team');

        return view('frontend.teamsPermisions.show', compact('teamsPermision'));
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
