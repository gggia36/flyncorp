<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Bootstrap modal sidebar, hide on scroll navbar, Bootstrap 5 icons" />
	<meta name="keywords" content="modal sidebar drawer, hide on scroll navbar, bootstrap 5 icons" /> -->
	<title>flyncorp</title>
	<link rel="shortcut icon" href="<?php echo e(asset('assets/image/logo/logo_footer.svg')); ?>">


	<link href="<?php echo e(asset('assets/bootstrap4/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/vender/lightslider-master/dist/css/lightslider.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/fontawesom/css/all.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/fonts/stylesheet.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/vender/aos/aos.css')); ?>" rel="stylesheet">
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('metaOg'); ?>
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap4/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vender/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vender/lightslider-master/dist/js/lightslider.js')); ?>"></script>

    

</head>
<body>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="">
<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->yieldContent('modal'); ?>
</main>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/slide.js')); ?>"></script>


 <script>
    AOS.init();
  </script>
 <script>
    var url_gb = "<?php echo e(url('/')); ?>";
    var asset_gb = "<?php echo e(asset('/')); ?>";

    // $('.select2').select2();
</script>
<?php echo $__env->yieldContent('script'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/layouts/layout.blade.php ENDPATH**/ ?>