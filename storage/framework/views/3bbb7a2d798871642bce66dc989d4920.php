

<?php $__env->startSection('title', $blog->title); ?>

<?php $__env->startSection('header'); ?>
    <nav>
        <a href="/home">Home</a>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <h1><?php echo e($blog->title); ?></h1>

    <p><?php echo e($blog->text); ?></p>

    <p>Creado por <?php echo e($blog->user->name); ?></p>
    
    <form action="/blog/<?php echo e($blog->id); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button type="submit">Delete</button>
    </form>

    <a href="/blog/<?php echo e($blog->id); ?>/edit">Edit</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\practicas\Desktop\franken\laravel\resources\views/blog.blade.php ENDPATH**/ ?>