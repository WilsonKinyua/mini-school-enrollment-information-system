<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
       @yield('title') -  {{ trans('panel.site_title') }}
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Modernize js -->
    <script src="{{ asset('js/modernizr-3.6.0.min.js')}}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    @yield('styles')
</head>
<body>
<!-- Preloader Start Here -->
    <div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('partials.header')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('partials.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            {{-- <div class="breadcrumbs-area">
                <h3>Dashboard</h3>
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>Student</li>
                </ul>
            </div> --}}

            @yield('breadcubs')

            <!-- Breadcubs Area End Here -->


            @yield('content')


        <!-- Footer Area Start Here -->
        {{-- <footer class="footer-wrap-layout1">
            <div class="copyright">© Copyrights <a href="/">{{ trans('panel.site_title') }}</a> 2021. All rights reserved</div>
        </footer> --}}
        <!-- Footer Area End Here -->
        </div>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>
 <!-- jquery-->
 <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
 <!-- Plugins js -->
 <script src="{{ asset('js/plugins.js')}}"></script>
 <!-- Popper js -->
 <script src="{{ asset('js/popper.min.js')}}"></script>
 <!-- Bootstrap js -->
 <script src="{{ asset('js/bootstrap.min.js')}}"></script>
 <!-- Counterup Js -->
 <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
 <!-- Moment Js -->
 <script src="{{ asset('js/moment.min.js')}}"></script>
 <!-- Waypoints Js -->
 <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
 <!-- Scroll Up Js -->
 <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
 <!-- Full Calender Js -->
 <script src="{{ asset('js/fullcalendar.min.js')}}"></script>
 <!-- Chart Js -->
 <script src="{{ asset('js/Chart.min.js')}}"></script>
 <!-- Data Table Js -->
 <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
 <!-- Custom Js -->
 <script src="{{ asset('main.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
 <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
 <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
 <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
 <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
 <script src="{{ asset('js/main.js') }}"></script>
 <script>
    $(function() {
let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
let printButtonTrans = '{{ trans('global.datatables.print') }}'
let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
let selectAllButtonTrans = '{{ trans('global.select_all') }}'
let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

let languages = {
'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
};

$.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
$.extend(true, $.fn.dataTable.defaults, {
language: {
  url: languages['{{ app()->getLocale() }}']
},
columnDefs: [{
    orderable: false,
    className: 'select-checkbox',
    targets: 0
}, {
    orderable: false,
    searchable: false,
    targets: -1
}],
select: {
  style:    'multi+shift',
  selector: 'td:first-child'
},
order: [],
scrollX: true,
pageLength: 100,
dom: 'lBfrtip<"actions">',
buttons: [
  {
    extend: 'selectAll',
    className: 'btn-primary',
    text: selectAllButtonTrans,
    exportOptions: {
      columns: ':visible'
    },
    action: function(e, dt) {
      e.preventDefault()
      dt.rows().deselect();
      dt.rows({ search: 'applied' }).select();
    }
  },
  {
    extend: 'selectNone',
    className: 'btn-primary',
    text: selectNoneButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'copy',
    className: 'btn-default',
    text: copyButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'csv',
    className: 'btn-default',
    text: csvButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'excel',
    className: 'btn-default',
    text: excelButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'pdf',
    className: 'btn-default',
    text: pdfButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'print',
    className: 'btn-default',
    text: printButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  },
  {
    extend: 'colvis',
    className: 'btn-default',
    text: colvisButtonTrans,
    exportOptions: {
      columns: ':visible'
    }
  }
]
});

$.fn.dataTable.ext.classes.sPageButton = '';
});

</script>
<script>
    $(document).ready(function () {
$(".notifications-menu").on('click', function () {
    if (!$(this).hasClass('open')) {
        $('.notifications-menu .label-warning').hide();
        $.get('/admin/user-alerts/read');
    }
});
});

</script>
</body>


</html>
