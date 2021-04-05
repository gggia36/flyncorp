<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="robots" content="noindex,nofollow">
    <title>flyncorp Admin</title>
    
    <link rel="shortcut icon" href="<?php echo e(asset('assets/image/logo/logo_footer.svg')); ?>">

    <link href="<?php echo e(asset('assets/ample/dist/css/style.min.css')); ?>" rel='stylesheet'>

    <link href="<?php echo e(asset('assets/ample/src/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')); ?>" rel='stylesheet' media='screen'>
    <link href="<?php echo e(asset('assets/ample/src/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css')); ?>" rel='stylesheet' media='screen'>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('assets/ample/dist/css/bootstrap2-toggle.min.css')); ?>" rel='stylesheet' media='screen'>
    <link href="<?php echo e(asset('assets/ample/src/libs/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">
    <script src="<?php echo e(asset('assets/ample/src/libs/jquery/dist/jquery.min.js')); ?>"></script>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.6/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

</head>

<body>

    <div id="main-wrapper">

        <?php echo $__env->make('layouts.navbaradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.sidebaradmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 justify-content-start d-flex align-items-center">
                        <h5 class="font-medium text-uppercase mb-0"><?php echo e($MainMenus); ?></h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 d-flex justify-content-start justify-content-md-end align-self-center">
                        <nav aria-label="breadcrumb" class="mt-2">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/category')); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($MainMenus); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="page-content container-fluid">
                
                <?php echo $__env->yieldContent('content'); ?>

                <?php echo $__env->yieldContent('modal'); ?>
            </div>

            

        </div>
    </div>

    <script src="<?php echo e(asset('assets/ample/src/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/app.init.sidebar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/app-style-switcher.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/extra-libs/sparkline/sparkline.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/waves.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/sidebarmenu.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/sweetalert2/dist/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/sweetalert2/sweet-alert.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/extra-libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/pages/datatable/datatable-basic.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/select2/dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/select2/dist/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/pages/forms/select2/select2.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/pages/datatable/datatable-advanced.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/extra-libs/jqbootstrapvalidation/validation.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/dist/js/bootstrap2-toggle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.priceformat.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/ample/src/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/3.2.6/js/froala_editor.pkgd.min.js'></script>
    <script src="<?php echo e(asset('assets/js/function.js')); ?>"></script>



    

    <!-- This Page JS -->
    <script>
        var url_gb = "<?php echo e(url('/')); ?>";
        var asset_gb = "<?php echo e(asset('/')); ?>";


        // $('.select2').select2();
    </script>
     <?php echo $__env->yieldContent('script'); ?>

     <script>
        function Click_logout() {
            sessionStorage.setItem('session_login', 0);
            window.location = "<?php echo e(url('/admin/login')); ?>";
        }
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/layouts/layoutadmin.blade.php ENDPATH**/ ?>