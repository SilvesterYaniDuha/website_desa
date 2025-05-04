

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Desa Purbalingga</h1>
            <p class="lead">Desa yang maju, mandiri, dan sejahtera</p>
        </div>
    </section>

    <!-- Profil Singkat -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Profil Singkat Desa</h2>
                    <p>Desa Purbalingga adalah desa yang terletak di kecamatan yang subur dengan mayoritas penduduk bekerja sebagai petani dan pedagang. Desa kami memiliki banyak potensi yang sedang dikembangkan.</p>
                    <a href="<?php echo e(route('profil')); ?>" class="btn btn-success">Baca Selengkapnya</a>
                </div>
                <div class="col-md-6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/archive/a/af/20190331182022%21Lambang_Kabupaten_Purbalingga.png/120px-Lambang_Kabupaten_Purbalingga.png" alt="Logo Desa" style="height: 70px;"> 
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Layanan Unggulan Desa</h2>
            <div class="row">
                <?php $__currentLoopData = $layanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card card-layanan h-100">
                        <div class="card-body text-center">
                            <i class="bi <?php echo e($layanan->icon); ?> fs-1 text-success mb-3"></i>
                            <h3><?php echo e($layanan->nama_layanan); ?></h3>
                            <p><?php echo e(Str::limit($layanan->deskripsi, 100)); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo e(route('layanan')); ?>" class="btn btn-outline-success">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Galeri Kegiatan Desa</h2>
            <div class="row">
                <?php $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo e(asset('storage/' . $galeri->gambar)); ?>" class="card-img-top" alt="<?php echo e($galeri->judul); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($galeri->judul); ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo e(route('galeri')); ?>" class="btn btn-success">Lihat Galeri Lengkap</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\website-desa\resources\views/beranda.blade.php ENDPATH**/ ?>