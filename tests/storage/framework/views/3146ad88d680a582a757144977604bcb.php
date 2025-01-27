<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopsi Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fixed-top-right {
            position: fixed;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Hewan untuk Diadopsi</h1>
        <div class="row">
            <?php $__currentLoopData = $hewan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('storage/' . $h->foto)); ?>" class="card-img-top" alt="<?php echo e($h->nama); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($h->nama); ?></h5>
                        <a href="<?php echo e(route('hewan.show', $h->id)); ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- Tombol Admin -->
    <div class="fixed-top-right">
        <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">Admin</a>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\adopsi\resources\views/hewan/index.blade.php ENDPATH**/ ?>