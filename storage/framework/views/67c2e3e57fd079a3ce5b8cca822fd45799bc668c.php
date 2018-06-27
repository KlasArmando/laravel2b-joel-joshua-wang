<?php $__env->startSection('content'); ?>
    <table class="adminTable">
    <a href="<?php echo e(url('about/')); ?>" class="btn btn-default">Go back</a><br/>
        <a href="<?php echo e(URL::to('/about/create')); ?>" class="btn btn-default">Create About</a>
    <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $abouts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>About</th>
                <th></th>
                <th></th>

            </tr>


    <hr>
<tr>
           <th> <?php echo e($abouts->text); ?></th>


           <td><a href="<?php echo e(url('about/'.$abouts->id)); ?>/edit" class="btn btn-default">Edit</a></td>
           <td> <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroy', $abouts->id],
                'class' => 'delete'
            ]); ?>


            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>


               <script>
                   $(".delete").on("submit", function(){
                       return confirm("Do you want to delete this item?");
                   });
               </script>
           </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>