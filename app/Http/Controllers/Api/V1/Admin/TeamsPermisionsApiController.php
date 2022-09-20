<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamsPermisionRequest;
use App\Http\Requests\UpdateTeamsPermisionRequest;
use App\Http\Resources\Admin\TeamsPermisionResource;
use App\Models\TeamsPermision;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamsPermisionsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('teams_permision_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamsPermisionResource(TeamsPermision::with(['team'])->get());
    }

    public function store(StoreTeamsPermisionRequest $request)
    {
        $teamsPermision = TeamsPermision::create($request->all());

        return (new TeamsPermisionResource($teamsPermision))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamsPermisionResource($teamsPermision->load(['team']));
    }

    public function update(UpdateTeamsPermisionRequest $request, TeamsPermision $teamsPermision)
    {
        $teamsPermision->update($request->all());

        return (new TeamsPermisionResource($teamsPermision))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TeamsPermision $teamsPermision)
    {
        abort_if(Gate::denies('teams_permision_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamsPermision->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
