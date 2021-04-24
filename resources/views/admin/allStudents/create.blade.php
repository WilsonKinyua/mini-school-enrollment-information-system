@extends('layouts.main')
@section('styles')
    <style>
        .help-block {
            color: red;
        }
    </style>
@endsection
@section('content')

<div class="card mt-5">

    <div class="card-body">
        <form method="POST" action="{{ route("admin.all-students.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="surname">{{ trans('cruds.allStudent.fields.surname') }}</label>
                <input type="hidden" name="created_by_id" value="{{ Auth::user()->id}}">
                <input class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" type="text" name="surname" id="surname" value="{{ old('surname', '') }}" required>
                @if($errors->has('surname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.surname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.allStudent.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="p_o_box">{{ trans('cruds.allStudent.fields.p_o_box') }}</label>
                <input class="form-control {{ $errors->has('p_o_box') ? 'is-invalid' : '' }}" type="text" name="p_o_box" id="p_o_box" value="{{ old('p_o_box', '') }}" required>
                @if($errors->has('p_o_box'))
                    <div class="invalid-feedback">
                        {{ $errors->first('p_o_box') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.p_o_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="town">{{ trans('cruds.allStudent.fields.town') }}</label>
                <input class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" type="text" name="town" id="town" value="{{ old('town', '') }}" required>
                @if($errors->has('town'))
                    <div class="invalid-feedback">
                        {{ $errors->first('town') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.town_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="town_code">{{ trans('cruds.allStudent.fields.town_code') }}</label>
                <input class="form-control {{ $errors->has('town_code') ? 'is-invalid' : '' }}" type="text" name="town_code" id="town_code" value="{{ old('town_code', '') }}" required>
                @if($errors->has('town_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('town_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.town_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_no">{{ trans('cruds.allStudent.fields.phone_no') }}</label>
                <input class="form-control {{ $errors->has('phone_no') ? 'is-invalid' : '' }}" type="text" name="phone_no" id="phone_no" value="{{ old('phone_no', '') }}" required>
                @if($errors->has('phone_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.phone_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.allStudent.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="village">{{ trans('cruds.allStudent.fields.village') }}</label>
                <input class="form-control {{ $errors->has('village') ? 'is-invalid' : '' }}" type="text" name="village" id="village" value="{{ old('village', '') }}" required>
                @if($errors->has('village'))
                    <div class="invalid-feedback">
                        {{ $errors->first('village') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.village_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.allStudent.fields.county') }}</label>
                <select class="form-control {{ $errors->has('county') ? 'is-invalid' : '' }}" name="county" id="county" required>
                    <option value disabled {{ old('county', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllStudent::COUNTY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('county', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('county'))
                    <div class="invalid-feedback">
                        {{ $errors->first('county') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.county_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.allStudent.fields.country') }}</label>
                <select class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country" id="country" required>
                    <option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllStudent::COUNTRY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('country', 'Kenya') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_of_birth">{{ trans('cruds.allStudent.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required>
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.allStudent.fields.religion') }}</label>
                <select class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" id="religion">
                    <option value disabled {{ old('religion', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllStudent::RELIGION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('religion', 'Christian') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('religion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('religion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.religion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.allStudent.fields.gender') }}</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender" id="gender" required>
                    <option value disabled {{ old('gender', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllStudent::GENDER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kcpe_grade">{{ trans('cruds.allStudent.fields.kcpe_grade') }}</label>
                <input class="form-control {{ $errors->has('kcpe_grade') ? 'is-invalid' : '' }}" type="text" name="kcpe_grade" id="kcpe_grade" value="{{ old('kcpe_grade', '') }}" required>
                @if($errors->has('kcpe_grade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kcpe_grade') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.kcpe_grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="result_slip">{{ trans('cruds.allStudent.fields.result_slip') }}</label>
                <div class="needsclick dropzone {{ $errors->has('result_slip') ? 'is-invalid' : '' }}" id="result_slip-dropzone">
                </div>
                @if($errors->has('result_slip'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result_slip') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.result_slip_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kcpe_total_marks">{{ trans('cruds.allStudent.fields.kcpe_total_marks') }}</label>
                <input class="form-control {{ $errors->has('kcpe_total_marks') ? 'is-invalid' : '' }}" type="number" name="kcpe_total_marks" id="kcpe_total_marks" value="{{ old('kcpe_total_marks', '') }}" step="1" required>
                @if($errors->has('kcpe_total_marks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kcpe_total_marks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.kcpe_total_marks_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="birth_certificate">{{ trans('cruds.allStudent.fields.birth_certificate') }}</label>
                <div class="needsclick dropzone {{ $errors->has('birth_certificate') ? 'is-invalid' : '' }}" id="birth_certificate-dropzone">
                </div>
                @if($errors->has('birth_certificate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birth_certificate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.birth_certificate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="passport_photo">{{ trans('cruds.allStudent.fields.passport_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('passport_photo') ? 'is-invalid' : '' }}" id="passport_photo-dropzone">
                </div>
                @if($errors->has('passport_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('passport_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.passport_photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.allStudent.fields.disabled') }}</label>
                <select class="form-control {{ $errors->has('disabled') ? 'is-invalid' : '' }}" name="disabled" id="disabled" required>
                    <option value disabled {{ old('disabled', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AllStudent::DISABLED_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('disabled', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('disabled'))
                    <div class="invalid-feedback">
                        {{ $errors->first('disabled') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.disabled_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.allStudent.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="any_other_documents">{{ trans('cruds.allStudent.fields.any_other_documents') }}</label>
                <div class="needsclick dropzone {{ $errors->has('any_other_documents') ? 'is-invalid' : '' }}" id="any_other_documents-dropzone">
                </div>
                @if($errors->has('any_other_documents'))
                    <div class="invalid-feedback">
                        {{ $errors->first('any_other_documents') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.any_other_documents_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="admission_number">{{ trans('cruds.allStudent.fields.admission_number') }}</label>
                <input class="form-control {{ $errors->has('admission_number') ? 'is-invalid' : '' }}" type="text" name="admission_number" id="admission_number" value="{{ old('admission_number', '') }}" required>
                @if($errors->has('admission_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admission_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.admission_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.allStudent.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', '') }}" step="1" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.allStudent.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-lg" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.resultSlipDropzone = {
    url: '{{ route('admin.all-students.storeMedia') }}',
    maxFilesize: 20, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').find('input[name="result_slip"]').remove()
      $('form').append('<input type="hidden" name="result_slip" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="result_slip"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($allStudent) && $allStudent->result_slip)
      var file = {!! json_encode($allStudent->result_slip) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="result_slip" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.birthCertificateDropzone = {
    url: '{{ route('admin.all-students.storeMedia') }}',
    maxFilesize: 20, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').find('input[name="birth_certificate"]').remove()
      $('form').append('<input type="hidden" name="birth_certificate" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="birth_certificate"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($allStudent) && $allStudent->birth_certificate)
      var file = {!! json_encode($allStudent->birth_certificate) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="birth_certificate" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.passportPhotoDropzone = {
    url: '{{ route('admin.all-students.storeMedia') }}',
    maxFilesize: 20, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="passport_photo"]').remove()
      $('form').append('<input type="hidden" name="passport_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="passport_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($allStudent) && $allStudent->passport_photo)
      var file = {!! json_encode($allStudent->passport_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="passport_photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedAnyOtherDocumentsMap = {}
Dropzone.options.anyOtherDocumentsDropzone = {
    url: '{{ route('admin.all-students.storeMedia') }}',
    maxFilesize: 200, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 200
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="any_other_documents[]" value="' + response.name + '">')
      uploadedAnyOtherDocumentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAnyOtherDocumentsMap[file.name]
      }
      $('form').find('input[name="any_other_documents[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($allStudent) && $allStudent->any_other_documents)
          var files =
            {!! json_encode($allStudent->any_other_documents) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="any_other_documents[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
