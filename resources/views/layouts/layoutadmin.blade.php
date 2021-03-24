<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, ample admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample is powerful and clean admin dashboard template, inpired from Google's Material Design"> --}}
    <meta name="robots" content="noindex,nofollow">
    <title>flyncorp Admin</title>
    {{-- <link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" /> --}}
    <link rel="shortcut icon" href="{{asset('assets/image/logo/logo_footer.svg')}}">

    <link href="{{asset('assets/ample/dist/css/style.min.css')}}" rel='stylesheet'>

    <link href="{{asset('assets/ample/src/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel='stylesheet' media='screen'>
    <link href="{{asset('assets/ample/src/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css')}}" rel='stylesheet' media='screen'>

    <link href="{{asset('assets/ample/dist/css/bootstrap2-toggle.min.css')}}" rel='stylesheet' media='screen'>


</head>

<body>

    <div id="main-wrapper">

        @include('layouts.navbaradmin')

        @include('layouts.sidebaradmin')

        <div class="page-wrapper">
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
                        <h5 class="font-medium text-uppercase mb-0">{{$MainMenus}}</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
                        <nav aria-label="breadcrumb" class="mt-2">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="{{url('/admin/category')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$MainMenus}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-content container-fluid">
                {{-- <div class="row">
                    <div class="col-12">
                        <h1> 111111111 </h1>
                    </div>
                </div> --}}
                @yield('content')

                @yield('modal')
            </div>

            {{-- <footer class="footer text-center">
                All Rights Reserved by Ample admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer> --}}

        </div>
    </div>
    <script src="{{asset('assets/ample/src/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/app.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/app.init.sidebar.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/waves.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/feather.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/sweetalert2/sweet-alert.init.js')}}"></script>
    <script src="{{asset('assets/ample/src/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/pages/forms/select2/select2.init.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/pages/datatable/datatable-advanced.init.js')}}"></script>
    <script src="{{asset('assets/ample/src/extra-libs/jqbootstrapvalidation/validation.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/ample/dist/js/bootstrap2-toggle.min.js')}}"></script>



    {{-- <script src="{{asset('js/select2/select2.full.min.js')}}"></script> --}}

    <!-- This Page JS -->
    <script>
        var url_gb = "{{url('/')}}";
        var asset_gb = "{{asset('/')}}";


        // $('.select2').select2();
    </script>
     @yield('script')

</body>

</html>
