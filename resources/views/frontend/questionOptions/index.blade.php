@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('question_option_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.question-options.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.questionOption.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'QuestionOption', 'route' => 'admin.question-options.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.questionOption.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-QuestionOption">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.questionOption.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.questionOption.fields.question') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.questionOption.fields.option_text') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.questionOption.fields.is_correct') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questionOptions as $key => $questionOption)
                                    <tr data-entry-id="{{ $questionOption->id }}">
                                        <td>
                                            {{ $questionOption->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $questionOption->question->question_text ?? '' }}
                                        </td>
                                        <td>
                                            {{ $questionOption->option_text ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $questionOption->is_correct ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $questionOption->is_correct ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('question_option_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.question-options.show', $questionOption->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('question_option_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.question-options.edit', $questionOption->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('question_option_delete')
                                                <form action="{{ route('frontend.question-options.destroy', $questionOption->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('question_option_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.question-options.massDestroy') }}",
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
  let table = $('.datatable-QuestionOption:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection