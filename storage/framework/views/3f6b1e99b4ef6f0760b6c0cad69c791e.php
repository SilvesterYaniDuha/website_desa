

<?php $__env->startSection('title', 'Galeri Desa'); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-5">Galeri Kegiatan Desa <?php echo e(config('app.name')); ?></h1>
            
            <div class="row">
                <?php $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo e(asset('storage/' . $galeri->gambar)); ?>" class="card-img-top" alt="<?php echo e($galeri->judul); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($galeri->judul); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($galeri->deskripsi, 100)); ?></p>
                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#gambarModal<?php echo e($galeri->id); ?>">Lihat</button>
                        </div>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="gambarModal<?php echo e($galeri->id); ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo e($galeri->judul); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="<?php echo e(asset('storage/' . $galeri->gambar)); ?>" class="img-fluid" alt="<?php echo e($galeri->judul); ?>">
                                <p class="mt-3"><?php echo e($galeri->deskripsi); ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\website-desa\resources\views/galeri.blade.php ENDPATH**/ ?>