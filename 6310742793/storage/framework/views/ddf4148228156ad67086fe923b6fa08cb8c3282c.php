<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT System</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/prompt_thai/index.css')); ?>">
    <style>
        body {
            font-family: 'Prompt';
        }
    </style>
</head>

<body>
<?php echo $__env->make('layoutPage.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layoutPage.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/fontawesome/all.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xamppp\htdocs\CN334\6310742793\resources\views/layoutPage/screen.blade.php ENDPATH**/ ?>