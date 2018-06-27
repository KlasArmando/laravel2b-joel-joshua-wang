<?php $__env->startSection('content'); ?>
    <h1> Create About  </h1>

    <?php echo Form::open(['action' => 'AdminController@storeAbout', 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('text', 'Text')); ?>

            <?php echo e(Form::textarea('text', '', ['class' => 'form-control', 'placeholder'=>'Text'])); ?>

        </div>


            <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>