<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientTransactionRequest;
use App\Http\Requests\UpdateClientTransactionRequest;
use App\Http\Resources\Admin\ClientTransactionResource;
use App\Models\ClientTransaction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientTransactionsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('client_transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ClientTransactionResource(ClientTransaction::with(['project', 'transaction_type', 'income_source', 'currency', 'team'])->get());
    }

    public function store(StoreClientTransactionRequest $request)
    {
        $clientTransaction = ClientTransaction::create($request->all());

        return (new ClientTransactionResource($clientTransaction))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ClientTransactionResource($clientTransaction->load(['project', 'transaction_type', 'income_source', 'currency', 'team']));
    }

    public function update(UpdateClientTransactionRequest $request, ClientTransaction $clientTransaction)
    {
        $clientTransaction->update($request->all());

        return (new ClientTransactionResource($clientTransaction))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientTransaction->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
