@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.crmCustomer.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.crm-customers.update", [$crmCustomer->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', $crmCustomer->first_name) }}" required>
                            @if($errors->has('first_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_name">{{ trans('cruds.crmCustomer.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $crmCustomer->last_name) }}">
                            @if($errors->has('last_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ trans('cruds.crmCustomer.fields.email') }}</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $crmCustomer->email) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ trans('cruds.crmCustomer.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $crmCustomer->phone) }}">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.crmCustomer.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $crmCustomer->address) }}">
                            @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="facebook_profile">{{ trans('cruds.crmCustomer.fields.facebook_profile') }}</label>
                            <input class="form-control" type="text" name="facebook_profile" id="facebook_profile" value="{{ old('facebook_profile', $crmCustomer->facebook_profile) }}">
                            @if($errors->has('facebook_profile'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('facebook_profile') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.facebook_profile_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.crmCustomer.fields.whatsapp') }}</label>
                            <select class="form-control" name="whatsapp" id="whatsapp">
                                <option value disabled {{ old('whatsapp', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\CrmCustomer::WHATSAPP_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('whatsapp', $crmCustomer->whatsapp) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('whatsapp'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('whatsapp') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.whatsapp_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="whatsapp_number">{{ trans('cruds.crmCustomer.fields.whatsapp_number') }}</label>
                            <input class="form-control" type="text" name="whatsapp_number" id="whatsapp_number" value="{{ old('whatsapp_number', $crmCustomer->whatsapp_number) }}">
                            @if($errors->has('whatsapp_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('whatsapp_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.whatsapp_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="skype">{{ trans('cruds.crmCustomer.fields.skype') }}</label>
                            <input class="form-control" type="text" name="skype" id="skype" value="{{ old('skype', $crmCustomer->skype) }}">
                            @if($errors->has('skype'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('skype') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.skype_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="website">{{ trans('cruds.crmCustomer.fields.website') }}</label>
                            <input class="form-control" type="text" name="website" id="website" value="{{ old('website', $crmCustomer->website) }}">
                            @if($errors->has('website'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('website') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.website_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="description">{{ trans('cruds.crmCustomer.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description">{{ old('description', $crmCustomer->description) }}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crmCustomer.fields.description_helper') }}</span>
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