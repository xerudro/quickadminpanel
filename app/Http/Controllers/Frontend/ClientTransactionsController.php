<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyClientTransactionRequest;
use App\Http\Requests\StoreClientTransactionRequest;
use App\Http\Requests\UpdateClientTransactionRequest;
use App\Models\ClientTransaction;
use App\Models\Currency;
use App\Models\IncomeSource;
use App\Models\Project;
use App\Models\Team;
use App\Models\TransactionType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientTransactionsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('client_transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientTransactions = ClientTransaction::with(['project', 'transaction_type', 'income_source', 'currency', 'team'])->get();

        $projects = Project::get();

        $transaction_types = TransactionType::get();

        $income_sources = IncomeSource::get();

        $currencies = Currency::get();

        $teams = Team::get();

        return view('frontend.clientTransactions.index', compact('clientTransactions', 'currencies', 'income_sources', 'projects', 'teams', 'transaction_types'));
    }

    public function create()
    {
        abort_if(Gate::denies('client_transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.clientTransactions.create', compact('currencies', 'income_sources', 'projects', 'transaction_types'));
    }

    public function store(StoreClientTransactionRequest $request)
    {
        $clientTransaction = ClientTransaction::create($request->all());

        return redirect()->route('frontend.client-transactions.index');
    }

    public function edit(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clientTransaction->load('project', 'transaction_type', 'income_source', 'currency', 'team');

        return view('frontend.clientTransactions.edit', compact('clientTransaction', 'currencies', 'income_sources', 'projects', 'transaction_types'));
    }

    public function update(UpdateClientTransactionRequest $request, ClientTransaction $clientTransaction)
    {
        $clientTransaction->update($request->all());

        return redirect()->route('frontend.client-transactions.index');
    }

    public function show(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientTransaction->load('project', 'transaction_type', 'income_source', 'currency', 'team');

        return view('frontend.clientTransactions.show', compact('clientTransaction'));
    }

    public function destroy(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientTransaction->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientTransactionRequest $request)
    {
        ClientTransaction::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
