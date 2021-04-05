<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header border-end">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <a class="navbar-brand" href="<?php echo e(url('admin/category')); ?>">
                <!-- Logo icon -->
                
                <b class="logo-icon">
                    <img src="<?php echo e(asset('assets/image/logo/logo-light-icon.png')); ?>" alt="homepage" class="light-logo" />


                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                     <img src="<?php echo e(asset('assets/image/logo/logo-text.png')); ?>" alt="homepage" class="dark-logo" />

                </span>
            </a>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu fs-5"></i></a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo e(asset('assets/ample/src/images/users/3.jpg')); ?>" alt="user" class="rounded-circle" width="36">
                        <span class="ms-2 font-weight-medium">Admin</span><span class="fas fa-angle-down ms-2"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">
                            <div class=""><img src="<?php echo e(asset('assets/ample/src/images/users/3.jpg')); ?>" alt="user" class="rounded-circle" width="60"></div>
                            <div class="ms-2">
                                <h4 class="mb-0 text-white">Admin</h4>
                            </div>
                        </div>
                        
                            <a class="dropdown-item"onclick="Click_logout()">
                            <i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>


<?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/layouts/navbaradmin.blade.php ENDPATH**/ ?>