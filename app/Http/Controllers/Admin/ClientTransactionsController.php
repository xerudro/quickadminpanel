<?php

namespace App\Http\Controllers\Admin;

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
use Yajra\DataTables\Facades\DataTables;

class ClientTransactionsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('client_transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ClientTransaction::with(['project', 'transaction_type', 'income_source', 'currency', 'team'])->select(sprintf('%s.*', (new ClientTransaction())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'client_transaction_show';
                $editGate = 'client_transaction_edit';
                $deleteGate = 'client_transaction_delete';
                $crudRoutePart = 'client-transactions';

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
            $table->addColumn('project_name', function ($row) {
                return $row->project ? $row->project->name : '';
            });

            $table->addColumn('transaction_type_name', function ($row) {
                return $row->transaction_type ? $row->transaction_type->name : '';
            });

            $table->addColumn('income_source_name', function ($row) {
                return $row->income_source ? $row->income_source->name : '';
            });

            $table->editColumn('amount', function ($row) {
                return $row->amount ? $row->amount : '';
            });
            $table->addColumn('currency_name', function ($row) {
                return $row->currency ? $row->currency->name : '';
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'project', 'transaction_type', 'income_source', 'currency']);

            return $table->make(true);
        }

        $projects          = Project::get();
        $transaction_types = TransactionType::get();
        $income_sources    = IncomeSource::get();
        $currencies        = Currency::get();
        $teams             = Team::get();

        return view('admin.clientTransactions.index', compact('projects', 'transaction_types', 'income_sources', 'currencies', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('client_transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.clientTransactions.create', compact('currencies', 'income_sources', 'projects', 'transaction_types'));
    }

    public function store(StoreClientTransactionRequest $request)
    {
        $clientTransaction = ClientTransaction::create($request->all());

        return redirect()->route('admin.client-transactions.index');
    }

    public function edit(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clientTransaction->load('project', 'transaction_type', 'income_source', 'currency', 'team');

        return view('admin.clientTransactions.edit', compact('clientTransaction', 'currencies', 'income_sources', 'projects', 'transaction_types'));
    }

    public function update(UpdateClientTransactionRequest $request, ClientTransaction $clientTransaction)
    {
        $clientTransaction->update($request->all());

        return redirect()->route('admin.client-transactions.index');
    }

    public function show(ClientTransaction $clientTransaction)
    {
        abort_if(Gate::denies('client_transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clientTransaction->load('project', 'transaction_type', 'income_source', 'currency', 'team');

        return view('admin.clientTransactions.show', compact('clientTransaction'));
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
