<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, ">
    <meta name="description" content="Ample is powerful and clean admin dashboard template, inpired from Google's Material Design">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ampleadmin/" />
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> --}}
    <!-- Custom CSS -->
    <link href="{{asset('assets/ample/dist/css/style.min.css')}}" rel='stylesheet' media='screen'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{asset('assets/ample/src/images/background/login-register.jpg')}}) no-repeat center center; background-size: cover;">
            <div class="auth-box p-4 bg-white rounded">
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Sign In</h3>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal mt-3 form-material" id="formlogin" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <div>
                                        <input class="form-control" type="text" required="" name="username" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div>
                                        <input class="form-control" type="password" required="" name="password" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group text-center mt-4 mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/ample/src/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/ample/src/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script src="{{asset('assets/ample/src/libs/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets/ample/src/libs/sweetalert2/sweet-alert.init.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    // $('#to-recover').on("click", function() {
    //     $("#loginform").slideUp();
    //     $("#recoverform").fadeIn();
    // });



    $('body').on('submit', '#formlogin', function(e) {
            e.preventDefault();
            var form = $(this);
            loadingButton(form.find('button[type=submit]'));
            $.ajax({
                method: "POST",
                url: "{{url('admin/checkLogin')}}",
                data: form.serialize()
            }).done(function(res) {
                if (res.status == 0) {
                    Swal.fire(res.title, res.content, 'error');
                    sessionStorage.setItem('session_login', 0);
                    resetButton(form.find('button[type=submit]'));
                } else {
                    sessionStorage.setItem('session_login', 1);
                    resetButton(form.find('button[type=submit]'));

                    window.location = "{{url('/admin/category')}}";
                }
            }).fail(function(data) {
                resetButton(form.find('button[type=submit]'));
            });
        });


    </script>
</body>

</html>
