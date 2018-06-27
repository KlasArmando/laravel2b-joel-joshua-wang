<?php $__env->startSection('content'); ?>
    <h1> Create Comment for Admins  </h1>

    <?php echo Form::open(['action' => 'AdminController@storeComment', 'method' => 'POST']); ?>

    <div class="form-group">
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'Title'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('length', 'Length')); ?>

        <?php echo e(Form::text('length', '', ['class' => 'form-control', 'placeholder'=>'length'])); ?>

    </div>



    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>