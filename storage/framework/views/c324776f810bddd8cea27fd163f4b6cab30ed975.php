<?php $__env->startSection('content'); ?>
    <h1> Create Admin  </h1>

    <?php echo Form::open(['action' => 'AdminController@storeTerms', 'method' => 'POST']); ?>

    <div class="form-group">
        <?php echo e(Form::label('terms', 'Terms')); ?>

        <?php echo e(Form::textarea('terms', '', ['class' => 'form-control', 'placeholder'=>'Terms'])); ?>

    </div>


    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>