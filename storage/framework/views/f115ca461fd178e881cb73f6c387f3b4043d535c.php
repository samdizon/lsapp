<?php $__env->startSection('content'); ?>
    <h1>Create Post</h1>
    <?php echo Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/data', 'files'=>true]); ?>

        <div class="form-group">
          <?php echo e(Form::label('title','Title')); ?>

          <?php echo e(Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body','Body')); ?>

            <?php echo e(Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Post Body'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <div class="text-right">
                <?php echo e(Form::submit('Save',['class'=>'btn btn-outline-primary'])); ?>

        </div>
    <?php echo Form::close(); ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>