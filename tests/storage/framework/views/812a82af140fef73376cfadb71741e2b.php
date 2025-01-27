<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Adopsi Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>Admin</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('hewan.index')); ?>">Hewan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('adopsi.index')); ?>">Adopsi</a>
            </li>
            <li class="nav-item">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-link nav-link">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\adopsi\resources\views/layouts/admin.blade.php ENDPATH**/ ?>