<?php $__env->startSection('content'); ?>
    <h1> Create  </h1>

    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('length', 'Message')); ?>

            <?php echo e(Form::textarea('length', '', ['class' => 'form-control', 'placeholder'=>'Length', 'maxlength' => 191 ])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'title'])); ?>

        </div>

    <div class="form-group">
        <?php echo e(Form::file('cover_image')); ?>

    </div>

            <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>