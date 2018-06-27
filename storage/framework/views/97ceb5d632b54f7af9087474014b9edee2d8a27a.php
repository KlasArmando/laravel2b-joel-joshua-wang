<?php if(count($posts) > 0): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="well">
            <h3><a href="<?php echo url('posts/'.$post->id); ?> "><?php echo $post->title; ?></a></h3>
            <small>Written on <?php echo $post->created_at; ?> by <?php echo $post->user->name; ?></small>


        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>no posts found</p>
<?php endif; ?>