<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <nav class="navbar">
        <div class="logo">PINK DEV</div>

        <ul class="nav-links">
            <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->is('home') ? 'active' : ''); ?>">Home</a></li>
            <li><a href="<?php echo e(route('raw-materials')); ?>" class="<?php echo e(request()->is('raw-materials') ? 'active' : ''); ?>">Raw Materials</a></li>
            <li><a href="<?php echo e(route('inventory')); ?>" class="<?php echo e(request()->is('inventory') ? 'active-inventory' : ''); ?>">Inventory</a></li>
            <li><a href="<?php echo e(route('requests.index')); ?>" class="<?php echo e(request()->is('requests*') ? 'active-request' : ''); ?>">Requests</a></li>
            <li><a href="<?php echo e(route('terms')); ?>" class="<?php echo e(request()->is('terms') ? 'active' : ''); ?>">Terms & Conditions</a></li>
        </ul>
    </nav>
    <script src="<?php echo e(asset('js/navbar.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pink-dev\resources\views/components/navbar.blade.php ENDPATH**/ ?>