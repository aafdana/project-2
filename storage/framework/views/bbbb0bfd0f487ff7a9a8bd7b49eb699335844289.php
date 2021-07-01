

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Pedagang</strong>
                            <?php if(session('status')): ?>
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    <?php echo e(session('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <?php if(session('stat_del')): ?>
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <?php echo e(session('stat_del')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Pedagang</th>
                                        <th>ID Kelurahan</th>
                                        <th>Nama Toko</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                        <?php $__currentLoopData = $pedagang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ped): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($ped->id_pedagang); ?></td>
                                            <td><?php echo e($ped->ID_KELURAHAN); ?></td>
                                            <td><?php echo e($ped->nama_toko); ?></td>
                                            <td><?php echo e($ped->email_pedagang); ?></td>
                                            <td><?php echo e($ped->alamat_pedagang); ?></td>
                                            <td><?php echo e($ped->phone); ?></td>
                                            <td style="text-align:center;">
                                                <a href="/pedagang/<?php echo e($ped->id_pedagang); ?>/edit" class="btn btn-info btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="/pedagang/<?php echo e($ped->id_pedagang); ?>" method="post" class="d-inline">
                                                    <?php echo method_field('delete'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </tbody>
                                </table>
                                <?php echo e($pedagang->links()); ?>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/users/pedagang/index.blade.php ENDPATH**/ ?>