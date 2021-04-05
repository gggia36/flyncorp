<?php $__env->startSection('metaOg'); ?>
<?php $__currentLoopData = $metaog->product_image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($item->sort == 1 ): ?>
    <meta property="og:url"         content="<?php echo e($url); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo e($metaog->product_name); ?>" />
    <meta property="og:description"   content="<?php echo e($metaog->product_description); ?>" />
    <meta property="og:image"         content="<?php echo e(asset('/uploads/Product/'.$item->product_image)); ?>" />

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


<style>
.demo {
  width: 420px;
}

#lightSlider ul {
  list-style: none outside none;
  padding-left: 0;
  margin-bottom: 0;
}

#lightSlider li {
  display: block;
  float: left;
  margin-right: 6px;
  cursor: pointer;
  height: 100%;
}

#lightSlider img {
  display: block;
  height: auto;
  max-width: 100%;
  max-height: 380px;
}

.preferredHeight {
  max-height: 650px;
  position: relative;
  left: 50%;
  transform: translate(-50%);




}
.fix-img{
        /* height: 440px; */
    /* height: auto; */
    object-fit: contain;
    background-color: #F9F9F9;
    }

</style>
<section class="" id="bg-section1">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 fix-mt-product ">
            	<a class="color-565" href="<?php echo e(url('category/')); ?>/<?php echo e($product_detail->category_id); ?>"><i class="fas fa-angle-left color-565"></i> กลับหน้ารวมสินค้า</a>
            </div>
        </div>
        <div class="row mt-5">
                <input type="hidden" id="product_id" value="<?php echo e($product_detail->product_id); ?>">

                <div class="col-md-12 col-lg-6"  >
                    <div class="demo" id="slide_img">
                            
                    </div>
                </div>

        	<div class="col-md-12 col-lg-6 mt-4 mt-lg-0" id="show_detail_1">
        		

        	</div>
        </div>
    </div>
</section>

<section>
	<div class="container">
		<div class="row" id="show_detail_description">
			
		</div>
	</div>
</section>

<section class="mt-5">
	<div class="container">
		<div class="row">
			<hr class="hr-line">
		</div>
		<div class="row">
			<div class="col-md-12">
				<h5 class="mb-4">สินค้าเกี่ยวข้อง</h5>
			</div>
		</div>
		<div class="row" id="product_other">
			
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/web/producr_detail.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\flyncorp\resources\views/web/product_detail.blade.php ENDPATH**/ ?>