<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-8">
            <h1><?php echo e($post->title); ?></h1>  
        </div>
        <div class="col-4 text-right">
            <a class="btn btn-outline-secondary" href="/posts/<?php echo e($post->id); ?>/edit">Edit</a>
            <a class="btn btn-outline-danger" href="/posts/<?php echo e($post->id); ?>">Delete</a>
        </div>
    </div>
    <hr>
    <div>
        <p><?php echo e($post->body); ?></p>
    </div>
    <small>Written on <?php echo e($post->created_at); ?></small>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>