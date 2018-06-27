<?php $__env->startSection('content'); ?>
<h1>About Colly</h1>

<p style="text-align: center; width: 500px;position: absolute; top: 20em; left: 28em;">

    <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <div class="terms">
            <th><?php echo e($text->text); ?></th>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>