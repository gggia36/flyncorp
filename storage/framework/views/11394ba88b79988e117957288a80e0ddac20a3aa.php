<?php $__currentLoopData = $metaog->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($item->sort == 1 ): ?>
    <meta property="og:url"         content="<?php echo e($url); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo e($metaog->product_name); ?>" />
    <meta property="og:description"   content="<?php echo e($metaog->product_description); ?>" />
    <meta property="og:image"         content="<?php echo e(asset('/uploads/Product/'.$item->product_image)); ?>" />

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/layouts/metaOg.blade.php ENDPATH**/ ?>