

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah User</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID User</th>
                                        <th>Nama User</th>
                                        <th>Email</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <td><?php echo e($usr->id); ?></td>
                                            <td><?php echo e($usr->name); ?></td>
                                            <td><?php echo e($usr->email); ?></td>
                                            <td style="text-align:center;">
                                                <a href="" class="btn btn-info btn-sm">
                                                    <i class="fa fa-picture-o"></i>
                                                </a>
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="#" method="post" class="d-inline">
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </tbody>
                                </table>
                                <?php echo e($user->links()); ?>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/users/index.blade.php ENDPATH**/ ?>