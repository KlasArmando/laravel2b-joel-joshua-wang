<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="alert alert-success">
                            You are logged in as Admin
                        </div>

                        <div class="panel-body">
                            <a href="<?php echo url('posts/create'); ?>" class="btn btn-primary">Create Comment</a>
                            <h3>Your comments</h3>
                            <?php if(count($posts) > 0): ?>
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>

                                    </tr>


                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($post->title); ?></th>
                                            <th><a href="<?php echo e(url('posts/'.$post->id)); ?>/edit" class="btn btn-default">Edit</a></th>

                                            <td>
                                                <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                                <?php echo Form::close(); ?>

                                            </td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            <?php else: ?>
                                <p>You have no comments. Start commenting !</p>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>