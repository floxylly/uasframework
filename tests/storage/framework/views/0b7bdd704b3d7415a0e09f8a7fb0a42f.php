

<?php $__env->startSection('content'); ?>
<div class="container">
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
<div class="fixed-bottom text-start ms-3 mb-3">
    <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">Admin</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi-hewan\adopsi\resources\views/hewan/index.blade.php ENDPATH**/ ?>