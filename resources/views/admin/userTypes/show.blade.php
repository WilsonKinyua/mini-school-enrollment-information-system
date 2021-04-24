@extends('layouts.main')
@section('title')
View User Type
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary btn-lg" href="{{ route('admin.user-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userType.fields.id') }}
                        </th>
                        <td>
                            {{ $userType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userType.fields.name') }}
                        </th>
                        <td>
                            {{ $userType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userType.fields.image') }}
                        </th>
                        <td>
                            @if($userType->image)
                                <a href="{{ $userType->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $userType->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-primary btn-lg" href="{{ route('admin.user-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
