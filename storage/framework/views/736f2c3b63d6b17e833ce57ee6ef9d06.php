

<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('main'); ?>

    <form action="/blog/<?php echo e($blog->id); ?>" method="POST">
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo e($blog->title); ?>">
    
        <label for="text">Text</label>
        <input type="textarea" name="text" id="text" value="<?php echo e($blog->text); ?>">
        
        <button type="submit">Update</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\practicas\Desktop\franken\laravel\resources\views/edit.blade.php ENDPATH**/ ?>