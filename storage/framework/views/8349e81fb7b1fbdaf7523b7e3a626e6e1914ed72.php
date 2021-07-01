<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo e(url('/dashboard')); ?>"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <?php if(auth()->user()->role == 'admin'): ?>
                    <li class="menu-title">User</li><!-- /.menu-title -->
                    <li class="">
                        <a href="<?php echo e(url('/user')); ?>"> <i class="menu-icon fa fa-list"></i>Lihat User</a>
                        <a href="<?php echo e(url('/user/create')); ?>"> <i class="menu-icon fa fa-plus"></i>Tambah User</a>
                    </li>
                    <li class="menu-title">Tabel Aktor</li><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Mahasiswa</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="<?php echo e(url('/customer')); ?>">Lihat Mahasiswa</a></li>
                                <li><i class="fa fa-plus"></i><a href="<?php echo e(url('/tambahcustomer')); ?>">Tambah Mahasiswa</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Dosen</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="<?php echo e(url('/pedagang')); ?>">Lihat Dosen</a></li>
                                <li><i class="fa fa-plus"></i><a href="<?php echo e(url('/pedagang/create')); ?>">Tambah Dosen</a></li>
                            </ul>
                        </li>
                        <!-- <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Petani</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="<?php echo e(url('/petani')); ?>">Lihat Petani</a></li>
                                <li><i class="fa fa-plus"></i><a href="<?php echo e(url('/formpetani')); ?>">Tambah Petani</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="menu-title">Fitur</li><!-- /.menu-title 
                    <li class="menu-icon"><img src="<?php echo e(asset('images/hope-market.png')); ?>" width="50px" alt="Hope Market">Hope Market</li><!-- /.menu-title 
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Product</a></li>
                                <?php if(auth()->user()->role == 'admin'): ?>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Product</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Kategori Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="<?php echo e(url('/category')); ?>">Lihat Kategori</a></li>
                                <?php if(auth()->user()->role == 'admin'): ?>
                                <li><i class="fa fa-plus"></i><a href="<?php echo e(url('/category/create')); ?>">Tambah Kategori</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Foto Product</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Foto Product</a></li>
                                <?php if(auth()->user()->role == 'admin'): ?>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Foto Product</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="menu-icon"><img src="<?php echo e(asset('images/hope-invest.png')); ?>" width="50px" alt="Hope Invest">Hope Invest</li><!-- /.menu-title 
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Invest</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="">Lihat Inves</a></li>
                                <?php if(auth()->user()->role == 'admin'): ?>
                                <li><i class="fa fa-plus"></i><a href="">Tambah Inves</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <li class="menu-icon"><img src="<?php echo e(asset('images/edhope.png')); ?>" width="50px" alt="Hope Invest">EdHope</li><!-- /.menu-title 
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Materi Video</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-list"></i><a href="<?php echo e(url('/edhope')); ?>">Lihat Video</a></li>
                                <!-- <?php if(auth()->user()->role == 'admin'): ?> -->
                                <!-- <li><i class="fa fa-plus"></i><a href="">Tambah Video</a></li> -->
                                <!-- <?php endif; ?> -->
                            </ul>
                        </li>
                    <!-- <li class="menu-title">Transaksi</li> /.menu-title  -->
                    <!-- <li class=""> -->
                        <!-- <a href="#"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a> -->
                    </li>
                </ul>
            </div> 
        </nav>
    </aside> <?php /**PATH C:\xampp\htdocs\Hope\Hope\resources\views/layouts/include/_sidebar.blade.php ENDPATH**/ ?>