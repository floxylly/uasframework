

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Tambah Hewan</h1>
    <form action="<?php echo e(route('hewan.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Hewan</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Hewan</label>
            <select class="form-control" id="jenis" name="jenis" required>
                <option value="Kucing">Kucing</option>
                <option value="Anjing">Anjing</option>
                <option value="Kelinci">Kelinci</option>
                <option value="Ikan">Ikan</option>
                <option value="Landak">Landak</option>
                <option value="Burung">Burung</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi-hewan\adopsi\resources\views/hewan/create.blade.php ENDPATH**/ ?>