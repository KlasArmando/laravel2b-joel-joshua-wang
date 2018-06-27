<?php $__env->startSection('content'); ?>
    <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("searchcontent3")); ?>">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>
    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>

    <table class="adminTable">
        <a href="<?php echo e(url('admin/')); ?>" class="btn btn-default">Go back</a><br/>
        

        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>password</th>

            </tr>



            <tr>
                <th> <?php echo e($users->name); ?></th>
                <th> <?php echo e($users->email); ?></th>
                <th> <?php echo e($users->password); ?></th>

                <td><a href="<?php echo e(url('user/'.$users->id)); ?>/edit" class="btn btn-default">Edit</a></td>
                <td> <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['admin.destroyUser', $users->id],
                'class'=> 'delete'
            ]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger'], [ 'onsubmit' => 'return ConfirmDelete()']); ?>

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