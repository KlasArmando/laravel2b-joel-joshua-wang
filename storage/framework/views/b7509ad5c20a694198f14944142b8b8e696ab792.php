<?php $__env->startSection('content'); ?>
    <h1> Contact us!  </h1>

    <?php echo Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

    <div class="form-group">
        <?php echo e(Form::label('name', 'Full Name')); ?>

        <?php echo e(Form::text('name', '', ['class' => 'form-control', 'placeholder'=>'Full Name'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('email', 'E-mail')); ?>

        <?php echo e(Form::text('email', '', ['class' => 'form-control', 'placeholder'=>'E-mail'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('message', 'Message')); ?>

        <?php echo e(Form::textarea('message', '', ['class' => 'form-control', 'placeholder'=>'message'])); ?>

    </div>



    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>