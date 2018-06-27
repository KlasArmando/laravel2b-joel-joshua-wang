<?php $__env->startSection('content'); ?>
    <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("searchcontent3")); ?>">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by Name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    <table class="adminTable">
    <a href="<?php echo e(url('admin/')); ?>" class="btn btn-default">Go back</a><br/>
        <a href="<?php echo e(URL::to('/admin/create')); ?>" class="btn btn-default">All contact</a>

    <?php $__currentLoopData = $allcontact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allcontacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>message</th>

            </tr>



<tr>
           <th> <?php echo e($allcontacts->name); ?></th>
           <th> <?php echo e($allcontacts->email); ?></th>
           <th> <?php echo e($allcontacts->message); ?></th>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>