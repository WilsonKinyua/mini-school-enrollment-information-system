@extends('layouts.main')
@section('title')
{{ $allStudent->name }}
@endsection
@section('content')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        {{-- <h3>Students</h3> --}}
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>Student Details</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    @if($allStudent->passport_photo)
                            <img style="height: 250px; width: 250px" src="{{ $allStudent->passport_photo->getUrl() }}">
                    @endif
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium">{{ $allStudent->surname }} {{ $allStudent->name }} </h3>
                        <div class="header-elements">
                            <ul>
                                <li><a href="{{ route('admin.all-students.edit', $allStudent->id) }}"><i class="far fa-edit"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <p>{{ Str::limit($allStudent->description, 80) }}</p>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->name }}</td>
                                </tr>
                                <tr>
                                    <td>Sername:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->surname }}</td>
                                </tr>
                                <tr>
                                    <td>P.O BOX:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->p_o_box }}</td>
                                </tr>
                                <tr>
                                    <td>Town:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->town }}</td>
                                </tr>
                                <tr>
                                    <td>Town Code:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->town_code }}</td>
                                </tr>
                                <tr>
                                    <td>Phone No:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->phone_no }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->email }}</td>
                                </tr>
                                <tr>
                                    <td>Village:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->village }}</td>
                                </tr>
                                <tr>
                                    <td>County:</td>
                                    <td class="font-medium text-dark-medium">{{ App\Models\AllStudent::COUNTY_SELECT[$allStudent->county] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Country:</td>
                                    <td class="font-medium text-dark-medium">{{ App\Models\AllStudent::COUNTRY_SELECT[$allStudent->country] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td class="font-medium text-dark-medium">{{ App\Models\AllStudent::GENDER_SELECT[$allStudent->gender] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>KCPE Grade:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->kcpe_grade }}</td>
                                </tr>
                                <tr>
                                    <td>Religion:</td>
                                    <td class="font-medium text-dark-medium">{{ App\Models\AllStudent::RELIGION_SELECT[$allStudent->religion] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Result Slip:</td>
                                    <td class="font-medium text-dark-medium">
                                        @if($allStudent->result_slip)
                                            <a href="{{ $allStudent->result_slip->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>KCPE Total Marks:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->kcpe_total_marks }}</td>
                                </tr>
                                <tr>
                                    <td>Birth Certificate:</td>
                                    <td class="font-medium text-dark-medium">
                                        @if($allStudent->birth_certificate)
                                            <a href="{{ $allStudent->birth_certificate->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Disabled?</td>
                                    <td class="font-medium text-dark-medium">{{ App\Models\AllStudent::DISABLED_SELECT[$allStudent->disabled] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Any Other Document:</td>
                                    <td class="font-medium text-dark-medium">
                                        @foreach($allStudent->any_other_documents as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank">
                                                {{ trans('global.view_file') }}
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Addmission Number:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->admission_number }}</td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td class="font-medium text-dark-medium">{{ $allStudent->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
