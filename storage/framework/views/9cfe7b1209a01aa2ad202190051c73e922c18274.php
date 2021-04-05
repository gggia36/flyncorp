 <?php $__env->startSection('content'); ?>
<style>
   .filter{
        width: 115px;
        height: 40px;
        text-align: center;
   }

</style>

<section class="" id="bg-section1">
    <div class="container ">
        <div class="row text-center">
            <div class="col-md-12 fix-mt-product">
                <input type="hidden" id="category_id" value="<?php echo e($cate_product->category_id); ?>">
                <h1 class="text-uppercase fix-font text-blue mb-3 f-bold"><?php echo e($cate_product->category_name); ?></h1>
                <p><?php echo e($cate_product->category_short_description); ?></p>
            </div>
        </div>
        <div class="row">
        	<div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <p class="f-14 ">เรียงตาม</p>
                    </div>
                    <div class="col-8 mx-4">
                        <?php
                            $selected = isset($filter_type) ? $filter_type : '';
                        ?>
                        <select id="Filter_product" class="filter">
                            <option value="1" <?php echo e($selected == '' || $selected == 1 ? 'selected' : ''); ?> data-link="<?php echo e(url('category')); ?><?php echo e('/'.$cate_product->category_id); ?>/filter/1">อัพเดทล่าสุด</option>
                            <option value="2" <?php echo e($selected == 2 ? 'selected' : ''); ?> data-link="<?php echo e(url('category')); ?><?php echo e('/'.$cate_product->category_id); ?>/filter/2">ราคาสูงสุด </option>
                            <option value="3" <?php echo e($selected == 3 ? 'selected' : ''); ?> data-link="<?php echo e(url('category')); ?><?php echo e('/'.$cate_product->category_id); ?>/filter/3">ราคาต่ำสุด</option>
                        </select>

                    </div>
                </div>
        	</div>
        	<div class="col-6 text-right">
        		 <p class="f-14 py-2 mb-0" id="sum_cate">พบสินค้า <?php echo e(isset($Product) ? $Product->total() : 0); ?> ชิ้น</p>
        	</div>
        </div>
        <div class="row mt-5" id="show_product_category">
            <?php if(isset($Product) && count($Product)): ?>
                <?php $__currentLoopData = $Product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-6 ">
                    <a href="<?php echo e(url('category')); ?><?php echo e('/'.$cate_product->category_id); ?>/<?php echo e('product/'.$product->product_id); ?>">
                        <div class="img-hover-zoom">
                            <img class="w-100 img" style="height: 255px;" src="<?php echo e(asset('uploads/Product/'.$product->Product_Image[0]->product_image)); ?>"  onerror="this.src=`<?php echo e(asset('assets/uploads/images/no-image.jpg')); ?>`;" >
                        </div>
                        <div class="card-block">
                            <h5 class="fixed-text-1 text-blue"><?php echo e($product->product_name); ?></h5>
                            <small class="color-888"><?php echo e($product->product_size); ?></small>
                            <br><br>
                            
                            <p class="text-blue">฿ <?php echo e(number_format($product->product_price)); ?> </p>

                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <div class="float-right">
            <?php if(isset($Product) && count($Product)): ?>
            <?php echo e($Product->links()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/web/product_category.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/web/product.blade.php ENDPATH**/ ?>