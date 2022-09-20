@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.clientTransaction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.client-transactions.update", [$clientTransaction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="project_id">{{ trans('cruds.clientTransaction.fields.project') }}</label>
                <select class="form-control select2 {{ $errors->has('project') ? 'is-invalid' : '' }}" name="project_id" id="project_id" required>
                    @foreach($projects as $id => $entry)
                        <option value="{{ $id }}" {{ (old('project_id') ? old('project_id') : $clientTransaction->project->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('project'))
                    <span class="text-danger">{{ $errors->first('project') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.project_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transaction_type_id">{{ trans('cruds.clientTransaction.fields.transaction_type') }}</label>
                <select class="form-control select2 {{ $errors->has('transaction_type') ? 'is-invalid' : '' }}" name="transaction_type_id" id="transaction_type_id" required>
                    @foreach($transaction_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('transaction_type_id') ? old('transaction_type_id') : $clientTransaction->transaction_type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('transaction_type'))
                    <span class="text-danger">{{ $errors->first('transaction_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.transaction_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="income_source_id">{{ trans('cruds.clientTransaction.fields.income_source') }}</label>
                <select class="form-control select2 {{ $errors->has('income_source') ? 'is-invalid' : '' }}" name="income_source_id" id="income_source_id" required>
                    @foreach($income_sources as $id => $entry)
                        <option value="{{ $id }}" {{ (old('income_source_id') ? old('income_source_id') : $clientTransaction->income_source->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('income_source'))
                    <span class="text-danger">{{ $errors->first('income_source') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.income_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.clientTransaction.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $clientTransaction->amount) }}" step="0.01" required>
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="currency_id">{{ trans('cruds.clientTransaction.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id" required>
                    @foreach($currencies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('currency_id') ? old('currency_id') : $clientTransaction->currency->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transaction_date">{{ trans('cruds.clientTransaction.fields.transaction_date') }}</label>
                <input class="form-control date {{ $errors->has('transaction_date') ? 'is-invalid' : '' }}" type="text" name="transaction_date" id="transaction_date" value="{{ old('transaction_date', $clientTransaction->transaction_date) }}" required>
                @if($errors->has('transaction_date'))
                    <span class="text-danger">{{ $errors->first('transaction_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.transaction_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.clientTransaction.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $clientTransaction->name) }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.clientTransaction.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $clientTransaction->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.clientTransaction.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection