@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('team_user_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.team-users.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.teamUser.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.teamUser.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-TeamUser">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.roles') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.adress') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.phone_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.email_verified_at') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.teamUser.fields.approved') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($roles as $key => $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teamUsers as $key => $teamUser)
                                    <tr data-entry-id="{{ $teamUser->id }}">
                                        <td>
                                            {{ $teamUser->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $teamUser->name ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($teamUser->roles as $key => $item)
                                                <span>{{ $item->title }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $teamUser->adress ?? '' }}
                                        </td>
                                        <td>
                                            {{ $teamUser->phone_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $teamUser->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $teamUser->email_verified_at ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $teamUser->approved ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $teamUser->approved ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('team_user_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.team-users.show', $teamUser->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('team_user_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.team-users.edit', $teamUser->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('team_user_delete')
                                                <form action="{{ route('frontend.team-users.destroy', $teamUser->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('team_user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.team-users.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-TeamUser:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection