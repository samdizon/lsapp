<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-10">
            <h1><?php echo e($post->title); ?></h1>  
        </div>
        <div class="col-1 text-right">
            <a class="btn btn-outline-secondary" href="/posts/<?php echo e($post->id); ?>/edit">Edit</a>
        </div>
        <div class="col-1">
            <?php echo Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST']); ?>

                <?php echo Form::hidden('_method','DELETE'); ?>

                <?php echo Form::submit('Delete',['class'=>'btn btn-outline-danger']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
    <hr>
    <div>
        <p><?php echo $post->body; ?></p>
    </div>
    <small>Written on <?php echo e($post->created_at); ?></small>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>