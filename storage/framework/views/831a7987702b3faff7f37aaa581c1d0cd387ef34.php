<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

        <title><?php echo e(config('app.name','LSAPP')); ?></title>
    </head>
    <body>
        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container mt-3">
            <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div id="app"></div>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script> 
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            try{CKEDITOR.replace( 'article-ckeditor' );}catch{}
        </script>
    </body>
</html>
