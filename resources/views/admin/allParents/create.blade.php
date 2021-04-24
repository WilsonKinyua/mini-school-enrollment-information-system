@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.allParent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.all-parents.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.allParent.fields.guardian') }}</label>
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id}}">
                <select class="form-control {{ $errors->has('guardian') ? 'is-invalid' : '' }}" name="guardian" id="guardian" required>
                    <option value disabled {{ old('guardian', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllParent::GUARDIAN_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('guardian', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('guardian'))
                    <div class="invalid-feedback">
                        {{ $errors->first('guardian') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.guardian_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.allParent.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                @if($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="surname">{{ trans('cruds.allParent.fields.surname') }}</label>
                <input class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" type="text" name="surname" id="surname" value="{{ old('surname', '') }}" required>
                @if($errors->has('surname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.surname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="occupation">{{ trans('cruds.allParent.fields.occupation') }}</label>
                <input class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" type="text" name="occupation" id="occupation" value="{{ old('occupation', '') }}" required>
                @if($errors->has('occupation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('occupation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.occupation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_number">{{ trans('cruds.allParent.fields.id_number') }}</label>
                <input class="form-control {{ $errors->has('id_number') ? 'is-invalid' : '' }}" type="text" name="id_number" id="id_number" value="{{ old('id_number', '') }}">
                @if($errors->has('id_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.id_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="p_o_box">{{ trans('cruds.allParent.fields.p_o_box') }}</label>
                <input class="form-control {{ $errors->has('p_o_box') ? 'is-invalid' : '' }}" type="text" name="p_o_box" id="p_o_box" value="{{ old('p_o_box', '') }}" required>
                @if($errors->has('p_o_box'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_o_box') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.p_o_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="town">{{ trans('cruds.allParent.fields.town') }}</label>
                <input class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" type="text" name="town" id="town" value="{{ old('town', '') }}" required>
                @if($errors->has('town'))
                    <div class="invalid-feedback">
                        {{ $errors->first('town') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.town_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="town_code">{{ trans('cruds.allParent.fields.town_code') }}</label>
                <input class="form-control {{ $errors->has('town_code') ? 'is-invalid' : '' }}" type="text" name="town_code" id="town_code" value="{{ old('town_code', '') }}" required>
                @if($errors->has('town_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('town_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.town_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_no">{{ trans('cruds.allParent.fields.phone_no') }}</label>
                <input class="form-control {{ $errors->has('phone_no') ? 'is-invalid' : '' }}" type="text" name="phone_no" id="phone_no" value="{{ old('phone_no', '') }}" required>
                @if($errors->has('phone_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.phone_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="landline">{{ trans('cruds.allParent.fields.landline') }}</label>
                <input class="form-control {{ $errors->has('landline') ? 'is-invalid' : '' }}" type="text" name="landline" id="landline" value="{{ old('landline', '') }}">
                @if($errors->has('landline'))
                    <div class="invalid-feedback">
                        {{ $errors->first('landline') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.landline_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="guardian_email">{{ trans('cruds.allParent.fields.guardian_email') }}</label>
                <input class="form-control {{ $errors->has('guardian_email') ? 'is-invalid' : '' }}" type="email" name="guardian_email" id="guardian_email" value="{{ old('guardian_email') }}">
                @if($errors->has('guardian_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('guardian_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.guardian_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.allParent.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="student_id">{{ trans('cruds.allParent.fields.student') }}</label>
                <select class="form-control select2 {{ $errors->has('student') ? 'is-invalid' : '' }}" name="student_id" id="student_id" required>
                    @foreach($students as $id => $entry)
                        <option value="{{ $id }}" {{ old('student_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('student'))
                    <div class="invalid-feedback">
                        {{ $errors->first('student') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allParent.fields.student_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
