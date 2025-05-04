

<?php $__env->startSection('title', 'Layanan Desa'); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Layanan Desa <?php echo e(config('app.name')); ?></h1>
            
            <div class="row">
                <?php $__currentLoopData = $layanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card card-layanan h-100">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi <?php echo e($layanan->icon); ?> fs-1 text-success me-3"></i>
                                </div>
                                <div>
                                    <h3><?php echo e($layanan->nama_layanan); ?></h3>
                                    <p><?php echo e($layanan->deskripsi); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <div class="mt-5 bg-light p-5 rounded">
                <h2 class="text-center mb-4">Prosedur Pengajuan Layanan</h2>
                <ol>
                    <li>Datang ke Kantor Desa dengan membawa persyaratan</li>
                    <li>Isi formulir pengajuan</li>
                    <li>Serahkan kepada petugas</li>
                    <li>Tunggu proses verifikasi</li>
                    <li>Ambil hasil layanan sesuai jadwal yang ditentukan</li>
                </ol>
                <div class="text-center mt-4">
                    <a href="<?php echo e(route('kontak')); ?>" class="btn btn-success">Hubungi Kami untuk Info Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\website-desa\resources\views/layanan.blade.php ENDPATH**/ ?>