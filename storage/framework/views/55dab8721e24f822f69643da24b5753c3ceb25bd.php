<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="side">

        <h3>Welcome to Colly</h3>
        <p>Do you ever get tired of searching for the fitting clothes? stop at Colly you will find your fitting style</p>
        <div class="clothing">
         <img style="top: 10px;" src="<?php echo e(asset('img/hat.jpg')); ?>"/>
        </div>
        <div class="clothing">
            <img style="" src="<?php echo e(asset('img/shirt.jpg')); ?>"/>
        </div>
        <div class="clothing">
            <img style="bottom: 10px;" src="<?php echo e(asset('img/pants.jpg')); ?>"/>
        </div>
    <div class="main">
        <h2>Click <a href="<?php echo e(url("/categories")); ?>"> here</a> to get started </h2>
        <h5> </h5>
        
        <p></p>
        <p> .</p>
        <br>
    </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>