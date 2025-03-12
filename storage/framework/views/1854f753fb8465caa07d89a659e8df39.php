<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Título'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <header>
        <?php echo $__env->yieldContent('header'); ?>
    </header>

    <main>
        <?php echo $__env->yieldContent('main'); ?>
    </main>

    <footer>
        <?php echo $__env->yieldContent('footer'); ?>
    </footer>
</body>
</html><?php /**PATH C:\Users\practicas\Desktop\franken\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>