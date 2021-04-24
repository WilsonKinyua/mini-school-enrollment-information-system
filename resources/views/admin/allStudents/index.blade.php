@extends('layouts.main')
@section('title')
    Student List
@endsection
@section('content')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>All Students</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            @can('all_student_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-2">
                        <a class="fw-btn-fill btn-gradient-yellow" href="{{ route('admin.all-students.create') }}">
                            Add Student
                        </a>
                    </div>
                </div>
            @endcan
            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                        <tr>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.id') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.surname') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.name') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.p_o_box') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.town') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.town_code') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.phone_no') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.village') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.county') }}
                            </th> --}}
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.country') }}
                            </th> --}}
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.date_of_birth') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.religion') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.gender') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.kcpe_grade') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.result_slip') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.kcpe_total_marks') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.birth_certificate') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.passport_photo') }}
                            </th>
                            {{-- <th>
                                {{ trans('cruds.allStudent.fields.disabled') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.description') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.any_other_documents') }}
                            </th>
                            <th>
                                {{ trans('cruds.allStudent.fields.admission_number') }}
                            </th> --}}
                            <th>
                                {{ trans('cruds.allStudent.fields.status') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allStudents as $key => $allStudent)
                        <tr data-entry-id="{{ $allStudent->id }}">
                            {{-- <td>
                                {{ $allStudent->id ?? '' }}
                            </td> --}}
                            <td>
                                {{ $allStudent->surname ?? '' }}
                            </td>
                            <td>
                                {{ $allStudent->name ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $allStudent->p_o_box ?? '' }}
                            </td> --}}
                            <td>
                                {{ $allStudent->town ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $allStudent->town_code ?? '' }}
                            </td> --}}
                            <td>
                                {{ $allStudent->phone_no ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $allStudent->email ?? '' }}
                            </td>
                            <td>
                                {{ $allStudent->village ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AllStudent::COUNTY_SELECT[$allStudent->county] ?? '' }}
                            </td> --}}
                            {{-- <td>
                                {{ App\Models\AllStudent::COUNTRY_SELECT[$allStudent->country] ?? '' }}
                            </td>
                            <td>
                                {{ $allStudent->date_of_birth ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\AllStudent::RELIGION_SELECT[$allStudent->religion] ?? '' }}
                            </td> --}}
                            <td>
                                {{ App\Models\AllStudent::GENDER_SELECT[$allStudent->gender] ?? '' }}
                            </td>
                            <td>
                                {{ $allStudent->kcpe_grade ?? '' }}
                            </td>
                            <td>
                                @if($allStudent->result_slip)
                                    <a href="{{ $allStudent->result_slip->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            {{-- <td>
                                {{ $allStudent->kcpe_total_marks ?? '' }}
                            </td> --}}
                            <td>
                                @if($allStudent->birth_certificate)
                                    <a href="{{ $allStudent->birth_certificate->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($allStudent->passport_photo)
                                    <a href="{{ $allStudent->passport_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $allStudent->passport_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            {{-- <td>
                                {{ App\Models\AllStudent::DISABLED_SELECT[$allStudent->disabled] ?? '' }}
                            </td>
                            <td>
                                {{ $allStudent->description ?? '' }}
                            </td>
                            <td>
                                @foreach($allStudent->any_other_documents as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $allStudent->admission_number ?? '' }}
                            </td> --}}
                            <td>
                                {{ $allStudent->status ?? '' }}
                            </td>
                            <td>
                                @can('all_student_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.all-students.show', $allStudent->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('all_student_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.all-students.edit', $allStudent->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('all_student_delete')
                                    <form action="{{ route('admin.all-students.destroy', $allStudent->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('all_student_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.all-students.massDestroy') }}",
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
  let table = $('.datatable-AllStudent:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
