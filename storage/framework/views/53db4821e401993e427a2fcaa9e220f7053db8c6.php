<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->stopSection(); ?>

<table class="adminTable">
<div class="container">
    <div class="row" >
        <h1>Your Search Results matched with the name you have searched for</h1>

        <tr>
            <th>Created by</th>
            <th>Title</th>
            <th>Comment</th>
            <th>Created</th>
        </tr>

        <?php if(count($user)>0): ?>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($users->name); ?></td>
                    <td><?php echo e($users->email); ?></td>
                    <td><?php echo e($users->password); ?></td>
                    <td><?php echo e($users->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
</table>