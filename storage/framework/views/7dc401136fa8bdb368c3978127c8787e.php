<?php if(auth()->guard()->guest()): ?>
    <nav class="bg-indigo-200 p-6 flex justify-between h-16 items-center">
        <a href="/">Imagen corporativa</a>
        <div>
            <a href="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-4 rounded-full">Login</a>
            <a href="/register" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-4 rounded-full">Register</a>
        </div>
    </nav>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <nav class="bg-indigo-200 p-6 flex justify-between h-16 items-center">
        <a href="/">Imagen corporativa</a>
        <div>
            <form action="/logout" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-light py-2 px-4 rounded-full">Logout</button>
            </form>
        </div>
    </nav>    
<?php endif; ?><?php /**PATH C:\Users\richa\Desktop\proyecto-practicas\laravel\resources\views/components/header.blade.php ENDPATH**/ ?>