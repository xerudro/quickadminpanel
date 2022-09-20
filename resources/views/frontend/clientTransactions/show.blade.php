@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.clientTransaction.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.client-transactions.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.project') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->project->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.transaction_type') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->transaction_type->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.income_source') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->income_source->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.amount') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.currency') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->currency->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.transaction_date') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->transaction_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.clientTransaction.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $clientTransaction->description }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.client-transactions.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection