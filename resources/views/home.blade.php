@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('breadcubs')
<div class="breadcrumbs-area">
    <h3>Dashboard</h3>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            Welcome back!!
        </li>
    </ul>
    @can('user_management_access')
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Students</div>
                            <div class="item-number"><span class="counter" data-num="{{ $students }}">{{ $students }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Parents</div>
                            <div class="item-number"><span class="counter" data-num="{{ $parents }}">{{ $parents }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-couple text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Users</div>
                            <div class="item-number"><span class="counter" data-num="{{ $users }}">{{ $users }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-red">
                            {{-- <i class="flaticon-angle-right text-red"></i> --}}
                            R
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Roles</div>
                            <div class="item-number"><span></span><span class="counter" data-num="{{ $roles}}">{{ $roles}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
        <!-- Users Table Area Start Here -->
        <div class="row">
            @can('user_management_access')
            <div class="col-lg-6">
                <div class="card dashboard-card-eleven">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>New Users</h3>
                            </div>
                        </div>
                        <div class="table-box-wrap">
                            <div class="table-responsive student-table-box">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Verified</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($new_users as $user)
                                        <tr>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>
                                                <span style="display:none">{{ $user->verified ?? '' }}</span>
                                                <input type="checkbox" disabled="disabled" {{ $user->verified ? 'checked' : '' }}>
                                            </td>
                                            <td>
                                                {{ $user->created_at }}
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
            <div class="col-lg-6">
                <div class="card dashboard-card-eleven">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>New Students</h3>
                            </div>
                        </div>
                        <div class="table-box-wrap">
                            <div class="table-responsive student-table-box">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Surname</th>
                                            <th>Name</th>
                                            <th>Town</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($new_students as $allStudent)
                                            <tr>
                                                <td>{{ $allStudent->surname ?? '' }}</td>
                                                <td>{{ $allStudent->name ?? '' }}</td>
                                                <td>{{ $allStudent->town ?? '' }}</td>
                                                <td>{{ $allStudent->phone_no ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card dashboard-card-eleven">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>New Parents</h3>
                            </div>
                        </div>
                        <div class="table-box-wrap">
                            <div class="table-responsive student-table-box">
                                <table class="table display data-table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Surname</th>
                                            <th>Phone</th>
                                            <th>Student</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($new_parents as $parent)
                                            <tr>
                                                <td>{{ $parent->first_name ?? '' }}</td>
                                                <td>{{ $parent->surname ?? '' }}</td>
                                                <td>{{ $parent->phone_no ?? '' }}</td>
                                                <td>{{ $parent->student->name ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endcan
            <!-- Dashboard summery End Here -->
            <div class="col-6-xxxl col-xl-12 col-12">
                <div class="card dashboard-card-thirteen">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Calender</h3>
                            </div>
                        </div>
                        <div class="calender-wrap">
                            <div id="fc-calender" class="fc-calender"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users Table Area End Here -->

    <!-- Social Media Start Here -->
    <div class="row gutters-20">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-fb hover-fb">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title"><a class="text-white" target="_blank" href="https://www.facebook.com/">Like us on facebook</a></h6>
                        </div>
                    </div>
                    {{-- <div class="social-like">30,000</div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-twitter hover-twitter">
                    <div class="media media-none--lg">
                            <div class="social-icon">
                            <i class="fab fa-twitter"></i>
                            </div>
                            <div class="media-body space-sm">
                                <h6 class="item-title"><a target="_blank" href="https://twitter.com/" class="text-white">Follow us on twitter</a></h6>
                            </div>
                    </div>
                    {{-- <div class="social-like">1,11,000</div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-gplus hover-gplus">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title"><a target="_blank" href="https://myaccount.google.com/profile" class="text-white">Follow us on googleplus</a></h6>
                        </div>
                    </div>
                    {{-- <div class="social-like">19,000</div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card dashboard-card-seven">
                <div class="social-media bg-linkedin hover-linked">
                    <div class="media media-none--lg">
                        <div class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="media-body space-sm">
                            <h6 class="item-title"><a target="_blank" href="https://www.linkedin.com/" class="text-white">Follow us on linked</a></h6>
                        </div>
                    </div>
                    {{-- <div class="social-like">45,000</div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Social Media End Here -->
</div>
@endsection
@section('scripts')
@parent

@endsection
