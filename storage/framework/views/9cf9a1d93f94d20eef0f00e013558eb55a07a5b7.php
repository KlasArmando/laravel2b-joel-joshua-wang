<?php $__env->startSection('content'); ?>

    <h1>Our visitors uploads</h1>
    <form class="navbar-form" role="search" method="GET" action="<?php echo e(url("searchcontent")); ?>">
        <div class="input-group">
            <input type="text" class="" placeholder="Search by name" name="name">
            <div class="input-group-btn">
                <button class="" type="submit">GO<i class=""></i></button>
            </div>
        </div>
    </form>

    <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="centerPost">
                <div class="row">
                    <div class="">


                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="bottomBorder">
                        <h3><a href="<?php echo e(url('posts/'.$post->id)); ?>"><?php echo e($post->title); ?></a></h3>
                            <hr>
                            <div class="postText">
                                <p style="width: 236px; height:30px;"><?php echo e($post->length); ?></p>
                            </div>
                              <img class="postImg" src="<?php echo e(asset("/storage/cover_images/$post->cover_image")); ?>" alt="<?php echo e($post->title); ?>" />
                                <input id="toggle-heart" type="checkbox"  />
                                <label for="toggle-heart">❤<p>100 Likes</p></label>

                            <small class="postSmall">Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>