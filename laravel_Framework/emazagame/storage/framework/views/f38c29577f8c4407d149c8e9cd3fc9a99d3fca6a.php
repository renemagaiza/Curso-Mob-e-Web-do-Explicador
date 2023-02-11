<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <?php echo $__env->make('base.include-seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('base.include-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body class="is-boxed has-animations">
<div class="body-wrap">

    <?php echo $__env->make('landing.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('landing.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>

    <?php echo $__env->make('base.include-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>

<?php /**PATH C:\Users\Rena\Documents\Curso-Mob-e-Web-do-Explicador\laravel_Framework\emazagame\resources\views/landing.blade.php ENDPATH**/ ?>