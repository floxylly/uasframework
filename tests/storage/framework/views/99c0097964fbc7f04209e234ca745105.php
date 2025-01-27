

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Form Adopsi</h1>
    <form action="<?php echo e(route('adopsi.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="hewan_id" value="<?php echo e($hewan->id); ?>">
        <div class="mb-3">
            <label for="nama_pengadopsi" class="form-label">Nama Pengadopsi</label>
            <input type="text" class="form-control" id="nama_pengadopsi" name="nama_pengadopsi" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Permintaan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi-hewan\adopsi\resources\views/adopsi/create.blade.php ENDPATH**/ ?>