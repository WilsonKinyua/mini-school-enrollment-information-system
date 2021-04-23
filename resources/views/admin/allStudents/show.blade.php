@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.allStudent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.all-students.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.id') }}
                        </th>
                        <td>
                            {{ $allStudent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.surname') }}
                        </th>
                        <td>
                            {{ $allStudent->surname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.name') }}
                        </th>
                        <td>
                            {{ $allStudent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.p_o_box') }}
                        </th>
                        <td>
                            {{ $allStudent->p_o_box }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.town') }}
                        </th>
                        <td>
                            {{ $allStudent->town }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.town_code') }}
                        </th>
                        <td>
                            {{ $allStudent->town_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.phone_no') }}
                        </th>
                        <td>
                            {{ $allStudent->phone_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.email') }}
                        </th>
                        <td>
                            {{ $allStudent->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.village') }}
                        </th>
                        <td>
                            {{ $allStudent->village }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.county') }}
                        </th>
                        <td>
                            {{ App\Models\AllStudent::COUNTY_SELECT[$allStudent->county] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.country') }}
                        </th>
                        <td>
                            {{ App\Models\AllStudent::COUNTRY_SELECT[$allStudent->country] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $allStudent->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.religion') }}
                        </th>
                        <td>
                            {{ App\Models\AllStudent::RELIGION_SELECT[$allStudent->religion] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\AllStudent::GENDER_SELECT[$allStudent->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.kcpe_grade') }}
                        </th>
                        <td>
                            {{ $allStudent->kcpe_grade }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.result_slip') }}
                        </th>
                        <td>
                            @if($allStudent->result_slip)
                                <a href="{{ $allStudent->result_slip->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.kcpe_total_marks') }}
                        </th>
                        <td>
                            {{ $allStudent->kcpe_total_marks }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.birth_certificate') }}
                        </th>
                        <td>
                            @if($allStudent->birth_certificate)
                                <a href="{{ $allStudent->birth_certificate->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.passport_photo') }}
                        </th>
                        <td>
                            @if($allStudent->passport_photo)
                                <a href="{{ $allStudent->passport_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $allStudent->passport_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.disabled') }}
                        </th>
                        <td>
                            {{ App\Models\AllStudent::DISABLED_SELECT[$allStudent->disabled] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.description') }}
                        </th>
                        <td>
                            {{ $allStudent->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.any_other_documents') }}
                        </th>
                        <td>
                            @foreach($allStudent->any_other_documents as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.admission_number') }}
                        </th>
                        <td>
                            {{ $allStudent->admission_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allStudent.fields.status') }}
                        </th>
                        <td>
                            {{ $allStudent->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.all-students.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#student_all_parents" role="tab" data-toggle="tab">
                {{ trans('cruds.allParent.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="student_all_parents">
            @includeIf('admin.allStudents.relationships.studentAllParents', ['allParents' => $allStudent->studentAllParents])
        </div>
    </div>
</div>

@endsection