<?php $__env->startSection('content'); ?>
    <h1>Edit Post</h1>
    <?php echo Form::open(['action' => 'PostsController@update', 'method'=>'POST']); ?>

        <div class="form-group">
          <?php echo Form::label('title','Title'); ?>

          <?php echo Form::text('title','$post->title',['class'=>'form-control', 'placeholder'=>'Title']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('body','Body'); ?>

            <?php echo Form::textarea('body','$post->title',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Post Body']); ?>

        </div>
        <div class="text-right">
            <?php echo Form::hidden('_method','PUT'); ?>

            <?php echo Form::submit('Save',['class'=>'btn btn-outline-primary']); ?>

        </div>
    <?php echo Form::close(); ?> 
<?php $__env->stopSection(); ?>}
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>