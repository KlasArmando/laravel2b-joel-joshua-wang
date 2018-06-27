<?php $__env->startSection('content'); ?>
    <table class="adminTable">
    <a href="<?php echo e(url('terms/')); ?>" class="btn btn-default">Go back</a><br/>
        <a href="<?php echo e(URL::to('/terms/create')); ?>" class="btn btn-default">Create Term</a>
    <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Terms</th>
                <th></th>
                <th></th>

            </tr>


    <hr>
<tr>

           <th> <?php echo e($term->terms); ?></th>

           <td><a href="<?php echo e(url('termsIndex/'.$term->id)); ?>/edit" class="btn btn-default">Edit</a></td>
           <td> <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyTerms', $term->id]
            ]); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

           </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>