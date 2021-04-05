<nav class="navbar navbar-expand-lg fixed-top " id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand width-navbar-sm" href="<?php echo e(url('/')); ?>"><img class="w-100 " src="<?php echo e(asset('assets/image/logo/logo_flyn.svg')); ?>" alt="Flyncorp Icon"></a>
    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#modal_drawer_right" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-align-right"></i>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::segment(1) === '/' ? 'active'  : null); ?>" aria-current="page" href="<?php echo e(url('/')); ?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::segment(1) === 'product_category' ? 'active' : null); ?>" href="<?php echo e(url('category')); ?>">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::segment(1) === 'about' ? 'active' : null); ?>" href="<?php echo e(url('about')); ?>">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(Request::segment(1) === 'contact' ? 'active' : null); ?>" href="<?php echo e(url('contact')); ?>">CONTACT US</a>
        </li>
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<div id="modal_drawer_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
            <div class="modal-header">
                <div class="avatar"></div>
                <div class="text">
                     <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img class="w-50 ml-3" src="<?php echo e(asset('assets/image/logo/logo_flyn.svg')); ?>" alt="Flyncorp Icon"></a>
                </div>
            </div>
        <div class="modal-body">
        <ul class="menu">
             <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('product_category')); ?>">PRODUCT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('about')); ?>">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(url('contact')); ?>">CONTACT US</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/layouts/header.blade.php ENDPATH**/ ?>