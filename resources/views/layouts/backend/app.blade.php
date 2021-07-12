<!doctype html>
<html class="fixed header-dark">


<!-- Mirrored from www.laraplus.bestweby.com/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 17:06:07 GMT -->
<head> 

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Laraplus</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('admin/assets/favicon.ico')}}">


    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/summernote/summernote-bs4.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/jstree/themes/default/style.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('admin/assets/vendor/modernizr/modernizr.js')}}"></script>

</head>

<body>

    <section class="body">
        <!-- start: header -->
        @include('layouts.backend.partials.header')
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('layouts.backend.partials.sidebar')
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                @include('layouts.backend.partials.commonHeader')

                <!-- start: page -->
                @yield('content')

            </section>
            
        </div>

        @include('layouts.backend.partials.footer')

    </section>


    <!-- Vendor -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/common/common.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{asset('admin/assets/vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/flot.tooltip/flot.tooltip.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/snap.svg/snap.svg.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/liquid-meter/liquid.meter.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/ios7-switch/ios7-switch.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('admin/assets/js/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('admin/assets/js/theme.init.js')}}"></script>

    <!-- Examples -->
    <script src="{{asset('admin/assets/js/examples/examples.datatables.default.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/examples.datatables.tabletools.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/examples.dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/sweetalert2.js')}}"></script>
    <script src="{{asset('admin/assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @include('sweetalert::alert')
    @stack('js')
</body>
</html>