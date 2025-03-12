

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('header'); ?>

    <a href="/">Imagen empresa</a>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

    <form action="/login" method="POST">
        
        <?php echo csrf_field(); ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email...">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password...">

        <button type="submit">Login</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\richa\Desktop\proyecto-practicas\practica\resources\views/auth/login.blade.php ENDPATH**/ ?>