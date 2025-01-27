

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center mb-4">Detail Hewan</h1>
    <div class="card">
        <img src="<?php echo e(asset('storage/' . $hewan->foto)); ?>" class="card-img-top" alt="<?php echo e($hewan->nama); ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($hewan->nama); ?></h5>
            <p class="card-text"><strong>Jenis:</strong> <?php echo e($hewan->jenis); ?></p>
            <p class="card-text"><strong>Deskripsi:</strong> <?php echo e($hewan->deskripsi); ?></p>
            <a href="<?php echo e(route('adopsi.create', $hewan->id)); ?>" class="btn btn-success">Adopsi Hewan Ini</a>
            <a href="<?php echo e(route('hewan.index')); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi-hewan\adopsi\resources\views/hewan/show.blade.php ENDPATH**/ ?>