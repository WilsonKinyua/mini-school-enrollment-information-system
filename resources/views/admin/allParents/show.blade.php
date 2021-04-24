@extends('layouts.main')
@section('title')
     Parent Details
@endsection
@section('content')

<div class="card mt-5">
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.all-parents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.id') }}
                        </th>
                        <td>
                            {{ $allParent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.guardian') }}
                        </th>
                        <td>
                            {{ App\Models\AllParent::GUARDIAN_SELECT[$allParent->guardian] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.first_name') }}
                        </th>
                        <td>
                            {{ $allParent->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.surname') }}
                        </th>
                        <td>
                            {{ $allParent->surname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.occupation') }}
                        </th>
                        <td>
                            {{ $allParent->occupation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.id_number') }}
                        </th>
                        <td>
                            {{ $allParent->id_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.p_o_box') }}
                        </th>
                        <td>
                            {{ $allParent->p_o_box }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.town') }}
                        </th>
                        <td>
                            {{ $allParent->town }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.town_code') }}
                        </th>
                        <td>
                            {{ $allParent->town_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.phone_no') }}
                        </th>
                        <td>
                            {{ $allParent->phone_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.landline') }}
                        </th>
                        <td>
                            {{ $allParent->landline }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.guardian_email') }}
                        </th>
                        <td>
                            {{ $allParent->guardian_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.description') }}
                        </th>
                        <td>
                            {{ $allParent->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.allParent.fields.student') }}
                        </th>
                        <td>
                            {{ $allParent->student->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.all-parents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
