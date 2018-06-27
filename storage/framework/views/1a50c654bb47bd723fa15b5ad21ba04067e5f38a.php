<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<table class="adminTable">
<div class="container">
    <div class="row" >
        <h1>Your Search Results matched with the name you have searched for</h1>
        <?php if(count($admin)>0): ?>
            <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <th><?php echo e($admins->id); ?></th>
                <th><?php echo e($admins->name); ?></th>
                <th><?php echo e($admins->email); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
</table>