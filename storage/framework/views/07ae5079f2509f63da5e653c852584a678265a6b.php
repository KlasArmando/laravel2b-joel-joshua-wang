<?php $__env->startSection('content'); ?>
    <h1> Edit  </h1>

    <?php echo Form::open(['action' => ['AdminController@updateComment', $comment->id], 'method' => 'POST']); ?>

    <div class="form-group">
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', $comment->title, ['class' => 'form-control', 'placeholder'=>'Title'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('length', 'Length')); ?>

        <?php echo e(Form::text('length', $comment->length, ['class' => 'form-control', 'placeholder'=>'Length'])); ?>

    </div>


    <?php echo e(Form::hidden('_method', 'PUT')); ?>

    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>