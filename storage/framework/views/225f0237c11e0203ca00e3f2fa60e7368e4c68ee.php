<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1><?php echo e($title); ?></h1>
        <p>This is the Laravel application from youtube series</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>