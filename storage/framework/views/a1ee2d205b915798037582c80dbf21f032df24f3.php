<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="/posts/create" class="btn btn-outline-primary float-right">Create post</a>
                    <h3>Your blog post</h3>
                    <?php if(count($posts)>0): ?>
                        <div class="container mt-5 table-responsive">
                            <table class="table table-striped table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td scope="row"><?php echo e($post->title); ?></td>
                                                    <td class="text-right"><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-outline-info">Edit</a></td>
                                                    <td class="text-left">
                                                        <?php echo Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'POST']); ?>

                                                            <?php echo Form::submit('Delete',['class'=>'btn btn-outline-danger']); ?>

                                                            <?php echo Form::hidden('_method','DELETE'); ?>

                                                        <?php echo Form::close(); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                </table>
                        </div>
                    <?php else: ?>
                        <small>No posts found...</small>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>