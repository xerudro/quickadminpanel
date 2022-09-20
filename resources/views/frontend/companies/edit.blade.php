@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.company.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="company">{{ trans('cruds.company.fields.company') }}</label>
                            <input class="form-control" type="text" name="company" id="company" value="{{ old('company', $company->company) }}" required>
                            @if($errors->has('company'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.company_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="adress">{{ trans('cruds.company.fields.adress') }}</label>
                            <input class="form-control" type="text" name="adress" id="adress" value="{{ old('adress', $company->adress) }}" required>
                            @if($errors->has('adress'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('adress') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.adress_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">{{ trans('cruds.company.fields.phone_number') }}</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $company->phone_number) }}">
                            @if($errors->has('phone_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.phone_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.company.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $company->email) }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="category">{{ trans('cruds.company.fields.category') }}</label>
                            <input class="form-control" type="text" name="category" id="category" value="{{ old('category', $company->category) }}">
                            @if($errors->has('category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.category_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection