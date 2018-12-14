<?php $__env->startSection('content'); ?>
    <div class="container">
        <div>
            <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class="img-fluid w-100" alt="<?php echo e($post->cover_image); ?>">
        </div>
        <div class="my-4">
            <?php if(!Auth::guest()): ?>
                <div class="row">
                    <div class="col-10">
                        <h2><?php echo e($post->title); ?></h2>
                    </div>
                    <?php if(Auth::user()->id == $post->user_id): ?>
                        <div class="col-off col-1">
                            <a class="btn btn-outline-secondary" href="/posts/<?php echo e($post->id); ?>/edit">Edit</a>
                        </div>
                        <div class="col-1">
                                <?php echo Form::open(['action'=> ['PostsController@destroy',$post->id],'method'=>'POST']); ?>

                                <?php echo Form::hidden('_method','DELETE'); ?>

                                <?php echo Form::submit('Delete',['class'=>'btn btn-outline-danger']); ?>

                            <?php echo Form::close(); ?>

                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <hr>
            <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
        </div>
        <div class="mt-5">
            <p><?php echo $post->body; ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>