@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.clients.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.client.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="surname">{{ trans('cruds.client.fields.surname') }}</label>
                            <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', '') }}" required>
                            @if($errors->has('surname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('surname') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.surname_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.client.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="adress">{{ trans('cruds.client.fields.adress') }}</label>
                            <input class="form-control" type="text" name="adress" id="adress" value="{{ old('adress', '') }}" required>
                            @if($errors->has('adress'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('adress') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.adress_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="phone_number">{{ trans('cruds.client.fields.phone_number') }}</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" required>
                            @if($errors->has('phone_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.phone_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="company">{{ trans('cruds.client.fields.company') }}</label>
                            <input class="form-control" type="text" name="company" id="company" value="{{ old('company', '') }}">
                            @if($errors->has('company'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.company_helper') }}</span>
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