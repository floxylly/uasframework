<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo e(asset('storage/' . $hewan->foto)); ?>" class="img-fluid" alt="<?php echo e($hewan->nama); ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo e($hewan->nama); ?></h1>
                <p><strong>Jenis:</strong> <?php echo e($hewan->jenis); ?></p>
                <p><strong>Deskripsi:</strong> <?php echo e($hewan->deskripsi); ?></p>
                <a href="<?php echo e(route('adopsi.create', $hewan->id)); ?>" class="btn btn-success">Ingin Adopsi</a>
                <a href="<?php echo e(route('hewan.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\adopsi\resources\views/hewan/show.blade.php ENDPATH**/ ?>