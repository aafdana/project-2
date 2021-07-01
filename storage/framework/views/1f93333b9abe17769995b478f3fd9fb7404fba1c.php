

<?php $__env->startSection('content'); ?>
<div class="col-md-12" align="center">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo e(asset('images/hope-market.png')); ?>" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="color:black;">Hope Market</h5>
            <p style="color:black;">Fitur ini memungkinkan pedagang, petani dan pengunjung untuk melakukan aktivitas jual-beli secara online. Dengan menggunakan konsep online marketplace diharapkan dapat menjangkau target pasar yang lebih luas sehingga dapat memperoleh omset yang tinggi dan stabil.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo e(asset('images/hope-invest.png')); ?>" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="color:black;">Hope Invest</h5>
            <p style="color:black;">Fitur ini memungkinkan untuk petani menawarkan portofolio rencana bisnis mereka kepada calon investor dengan konsep online investmentplace. Selain itu pengunjung juga dapat melihat dan memilih portofolio bisnis petani hidroponik pada fitur ini dengan berbagai macam variasi komoditas sayur dan buah serta budget.
</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="<?php echo e(asset('images/edhope.png')); ?>" class="d-block w-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="color:black;">Educational Hope</h5>
            <p style="color:black;">Ed Hope atau Educational Hope merupakan fitur yang berfungsi untuk mengedukasi penggemar hidroponik pemula untuk meningkatkan teknik dan skill mereka dalam berhidroponik. Konsep dari fitur ini yaitu e-learning dengan membuka kelas mentoring yang akan dibimbing hingga satu kali panen.</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>