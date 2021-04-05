 <?php $__env->startSection('content'); ?>
<section class="" id="bg-section1">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-12 fix-mt-product">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold">PRODUCTS</h1>
                
            </div>
        </div>
        <div class="row my-5 py-5" id="show_category">
            
        </div>
    </div>
</section>

<section class="bg-gradient">
    <div class="container py-5 text-center">
        <div class="row py-5">
            <div class="col-md-12">
                <button type="button" onclick="location.href='contact'" class="btn btn-primary btn-lg btn-product">ติดต่อสอบถามเพิ่มเติม</button>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/web/front_category.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/web/product_category.blade.php ENDPATH**/ ?>