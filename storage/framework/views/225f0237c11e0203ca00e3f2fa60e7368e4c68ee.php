<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1><?php echo e($title); ?></h1>
        <p>This is the Laravel application from youtube series by Traversy Media</p>
        <?php if(Auth::guest()): ?>
            <p>
                <a class="btn btn-outline-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-outline-success btn-lg" href="/register" role="button">Register</a>
            </p>
        <?php else: ?>
            <p>
                <a class="btn btn-outline-primary btn-lg" href="/posts/create" role="button">Create post</a>
                <a class="btn btn-outline-success btn-lg" href="/posts" role="button">View blogs</a>
            </p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>