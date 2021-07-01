

<?php $__env->startSection('content'); ?>
<div class="col-md-12" align="center">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo e(asset('images/polinema 3.jpg')); ?>" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="color:white;">Activity Control</h5>
            <p style="color:white;">Website ini bertujuan untuk <br>memudahkan kontrol langsung terhadap mahasiswa oleh dosen</p>
        </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hope\Hope\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>