<div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="<?php echo e(asset('images/polinema 2.png')); ?>" alt="Hope"></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo e(asset('images/admin.jpg')); ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="<?php echo e(url('logout')); ?>"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div><?php /**PATH C:\xampp74\htdocs\alfath\resources\views/layouts/include/_navbar.blade.php ENDPATH**/ ?>