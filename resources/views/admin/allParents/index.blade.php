@extends('layouts.admin')
@section('content')
@can('all_parent_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.all-parents.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.allParent.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'AllParent', 'route' => 'admin.all-parents.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.allParent.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AllParent">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.guardian') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.surname') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.occupation') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.id_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.p_o_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.town') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.town_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.phone_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.landline') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.guardian_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.allParent.fields.student') }}
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\AllParent::GUARDIAN_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
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
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
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
                                @foreach($all_students as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allParents as $key => $allParent)
                        <tr data-entry-id="{{ $allParent->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $allParent->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AllParent::GUARDIAN_SELECT[$allParent->guardian] ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->surname ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->occupation ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->id_number ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->p_o_box ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->town ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->town_code ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->phone_no ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->landline ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->guardian_email ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->description ?? '' }}
                            </td>
                            <td>
                                {{ $allParent->student->name ?? '' }}
                            </td>
                            <td>
                                @can('all_parent_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.all-parents.show', $allParent->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('all_parent_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.all-parents.edit', $allParent->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('all_parent_delete')
                                    <form action="{{ route('admin.all-parents.destroy', $allParent->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('all_parent_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.all-parents.massDestroy') }}",
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
  let table = $('.datatable-AllParent:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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