<?php $__env->startSection('content'); ?>
    <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("searchcontent")); ?>">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    <table class="adminTable">
    <a href="<?php echo e(url('admin/')); ?>" class="btn btn-default">Go back</a><br/>
        <a href="<?php echo e(URL::to('/admin/create')); ?>" class="btn btn-default">Create  Admin</a>

    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admins): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Job Title</th>

            </tr>



<tr>
           <th> <?php echo e($admins->name); ?></th>
           <th> <?php echo e($admins->email); ?></th>
           <th> <?php echo e($admins->job_title); ?></th>

           <td><a href="<?php echo e(url('admin/'.$admins->id)); ?>/edit" class="btn btn-default">Edit</a></td>


    <td> <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyAdmin', $admins->id],
                'class' => 'delete'
            ]); ?>

            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

           </td>
        </tr>
            <script>
                $(".delete").on("submit", function(){
                    return confirm("Do you want to delete this item?");
                });
            </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>