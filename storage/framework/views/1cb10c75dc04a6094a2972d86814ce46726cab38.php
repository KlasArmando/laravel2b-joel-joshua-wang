<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin panel</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="alert alert-success">
                            You are logged in as Admin
                        </div>
                        <div class="adminNav">

                            <div class="grid-container">
                                <div class="grid-item"><a href="<?php echo url('admin/adminIndex'); ?>" class="btn btn-primary">Admin</a></div>
                                <div class="grid-item"><a href="<?php echo url('about/aboutIndex'); ?>" class="btn btn-primary">Create About</a></div>
                                <div class="grid-item"><a href="<?php echo url('terms/termsIndex'); ?>" class="btn btn-primary">Create Term</a></div>
                                <div class="grid-item"><a href="<?php echo url('comment/commentIndex'); ?>" class="btn btn-primary">Create comment for other admins</a></div>
                                <div class="grid-item"><a href="<?php echo url('contact/contactIndex'); ?>" class="btn btn-primary">All contact info</a></div>
                                <div class="grid-item"><a href="<?php echo url('user/userIndex'); ?>" class="btn btn-primary">All Users info</a></div>
                            </div>
                            <hr>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>