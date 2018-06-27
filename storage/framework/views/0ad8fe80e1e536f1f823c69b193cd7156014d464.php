<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url('posts/')); ?>" class="btn btn-default">Go back</a>
    <h1> <?php echo e($posts->email); ?> </h1>

   <div>
       <?php echo e($posts->message); ?>

   </div>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
    <a href="<?php echo e(url('posts/'.$posts->id)); ?>/edit" class="btn btn-default">Edit</a>

    <?php echo Form::open([
        'method' => 'DELETE',
        'route' => ['posts.destroy', $posts->id]
    ]); ?>

    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

            <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>