

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Daftar Adopsi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengadopsi</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Hewan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $adopsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($a->nama_pengadopsi); ?></td>
                <td><?php echo e($a->email); ?></td>
                <td><?php echo e($a->telepon); ?></td>
                <td><?php echo e($a->alamat); ?></td>
                <td><?php echo e($a->hewan->nama); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adopsi\resources\views/adopsi/index.blade.php ENDPATH**/ ?>