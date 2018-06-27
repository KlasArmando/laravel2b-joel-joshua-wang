<?php $__env->startSection('content'); ?>
    <h1>These are our terms</h1>

    <p style="text-align: center; width: 500px;position: absolute; top: 20em; left: 28em;">

        <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <div class="terms">
                <th><?php echo e($term->terms); ?></th>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>