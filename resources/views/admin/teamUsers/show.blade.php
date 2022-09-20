@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.teamUser.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.team-users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.id') }}
                        </th>
                        <td>
                            {{ $teamUser->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.name') }}
                        </th>
                        <td>
                            {{ $teamUser->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.roles') }}
                        </th>
                        <td>
                            @foreach($teamUser->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.adress') }}
                        </th>
                        <td>
                            {{ $teamUser->adress }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $teamUser->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.email') }}
                        </th>
                        <td>
                            {{ $teamUser->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.email_verified_at') }}
                        </th>
                        <td>
                            {{ $teamUser->email_verified_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamUser.fields.approved') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $teamUser->approved ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.team-users.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection