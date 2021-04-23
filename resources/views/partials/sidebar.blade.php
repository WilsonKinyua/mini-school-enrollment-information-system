  <!-- Sidebar Area Start Here -->
  <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
         <div class="header-logo">
             {{-- <a href="/"><img src="" alt="logo"></a> --}}
             {{ trans('panel.site_title') }}
         </div>
    </div>
     <div class="sidebar-menu-content">
         <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link"><i class="flaticon-open-book"></i><span>{{ trans('global.dashboard') }}</span></a>
            </li>
            @can('all_student_access')
            <li class="nav-item">
                <a href="{{ route("admin.all-students.index") }}" class="nav-link {{ request()->is("admin/all-students") || request()->is("admin/all-students/*") ? "menu-active" : "" }}"><i class="flaticon-open-book"></i><span> {{ trans('cruds.allStudent.title') }}</span></a>
            </li>
            @endcan
            @can('all_parent_access')
            <li class="nav-item">
                <a href="{{ route("admin.all-parents.index") }}" class="nav-link {{ request()->is("admin/all-parents") || request()->is("admin/all-parents/*") ? "menu-active" : "" }}"><i class="flaticon-open-book"></i><span>{{ trans('cruds.allParent.title') }}</span></a>
            </li>
            @endcan
            @can('user_management_access')
             <li class="nav-item sidebar-nav-item

                {{ request()->is("admin/permissions*") ? "nav sub-group-menu sub-group-active" : "" }}
                {{ request()->is("admin/roles*") ? "nav sub-group-menu sub-group-active" : "" }}
                {{ request()->is("admin/users*") ? "nav sub-group-menu sub-group-active" : "" }}
                {{ request()->is("admin/audit-logs*") ? "nav sub-group-menu sub-group-active" : "" }}
                {{ request()->is("admin/user-types*") ? "nav sub-group-menu sub-group-active" : "" }}

                ">
                 <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span> {{ trans('cruds.userManagement.title') }}</span></a>
                 <ul class="nav sub-group-menu">
                    @can('permission_access')
                     <li class="nav-item">
                         <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "menu-active" : "" }}"><i class="fas fa-angle-right"></i>{{ trans('cruds.permission.title') }}</a>
                     </li>
                     @endcan
                     @can('role_access')
                     <li class="nav-item">
                         <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "home-active" : "" }}"><i class="fas fa-angle-right"></i>{{ trans('cruds.role.title') }}</a>
                     </li>
                     @endcan
                     @can('user_access')
                     <li class="nav-item">
                         <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "home-active" : "" }}"><i class="fas fa-angle-right"></i>{{ trans('cruds.user.title') }}</a>
                     </li>
                     @endcan
                     @can('audit_log_access')
                     <li class="nav-item">
                         <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "home-active" : "" }}"><i class="fas fa-angle-right"></i> {{ trans('cruds.auditLog.title') }}</a>
                     </li>
                     @endcan
                     @can('user_type_access')
                     <li class="nav-item">
                        <a href="{{ route("admin.user-types.index") }}" class="nav-link {{ request()->is("admin/user-types") || request()->is("admin/user-types/*") ? "home-active" : "" }}"><i class="fas fa-angle-right"></i>{{ trans('cruds.userType.title') }}</a>
                    </li>
                    @endcan
                 </ul>
             </li>
             @endcan
             @can('user_alert_access')
             <li class="nav-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "home-active" : "" }}"><i class="flaticon-open-book"></i><span> {{ trans('cruds.userAlert.title') }}</span></a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "home-active" : "" }}"><i class="flaticon-open-book"></i><span>{{ trans('global.systemCalendar') }}</span></a>
            </li>
            @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="nav-link {{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "home-active" : "" }}"><i class="flaticon-open-book"></i><span>
                    {{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif
                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
            <li class="nav-item">
                <a href="{{ route('profile.password.edit') }}" class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'home-active' : '' }}"><i class="flaticon-open-book"></i><span>{{ trans('global.change_password') }}</span></a>
            </li>
            @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"><i class="flaticon-open-book"></i><span>{{ trans('global.logout') }}</span></a>
            </li>
         </ul>
     </div>
 </div>
 <!-- Sidebar Area End Here -->
