<?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <?php if(count($posts)>0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card my-2">
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                    </h4>
                    <small class="card-text">Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                </div>
            </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="float-right"><?php echo e($posts->links()); ?></div>
    <?php else: ?>
        <small>No posts to show...</small>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>