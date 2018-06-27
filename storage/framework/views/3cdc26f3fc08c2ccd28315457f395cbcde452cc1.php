<?php $__env->startSection('content'); ?>
    <table class="adminTable">
    <a href="<?php echo e(url('admin/')); ?>" class="btn btn-default">Go back</a><br/>
        <a href="<?php echo e(URL::to('/comment/create')); ?>" class="btn btn-default">Create comment for other Admins</a>
    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Title</th>
                <th>Message</th>
                <th></th>

            </tr>
    <hr>
<tr>
           <th> <?php echo e($comments->title); ?></th>
           <th> <?php echo e($comments->length); ?></th>


           <td><a href="<?php echo e(url('comment/'.$comments->id)); ?>/edit" class="btn btn-default">Edit</a></td>
           <td> <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyComment', $comments->id],
                'class' => 'delete'
            ]); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

           </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>
            $(".delete").on("submit", function(){
                return confirm("Do you want to delete this item?");
            });
        </script>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>