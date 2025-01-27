

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Edit Hewan</h1>
    <form action="<?php echo e(route('hewan.update', $hewan->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Hewan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($hewan->nama); ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Hewan</label>
            <select class="form-control" id="jenis" name="jenis" required>
                <option value="Kucing" <?php echo e($hewan->jenis == 'Kucing' ? 'selected' : ''); ?>>Kucing</option>
                <option value="Anjing" <?php echo e($hewan->jenis == 'Anjing' ? 'selected' : ''); ?>>Anjing</option>
                <option value="Kelinci" <?php echo e($hewan->jenis == 'Kelinci' ? 'selected' : ''); ?>>Kelinci</option>
                <option value="Ikan" <?php echo e($hewan->jenis == 'Ikan' ? 'selected' : ''); ?>>Ikan</option>
                <option value="Landak" <?php echo e($hewan->jenis == 'Landak' ? 'selected' : ''); ?>>Landak</option>
                <option value="Burung" <?php echo e($hewan->jenis == 'Burung' ? 'selected' : ''); ?>>Burung</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?php echo e($hewan->deskripsi); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <?php if($hewan->foto): ?>
                <img src="<?php echo e(asset('storage/' . $hewan->foto)); ?>" alt="<?php echo e($hewan->nama); ?>" width="100" class="mt-2">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi-hewan\adopsi\resources\views/hewan/edit.blade.php ENDPATH**/ ?>