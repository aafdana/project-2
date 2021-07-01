

<?php $__env->startSection('content'); ?>
        <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <h3>Tabel Mahasiswa</h3>
                            </div>
                            
                            <div class="card-body">
                                
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Asal Sekolah</th>
                                            <th>No.HP</th>
                                            <th>TTL</th>
                                            <th>Kode Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($mah->id_mahasiswa); ?></td>
                                            <td><?php echo e($mah->NIM); ?></td>
                                            <td><?php echo e($mah->Nama_Mahasiswa); ?></td>
                                            <td><?php echo e($mah->Jenis_Kelamin); ?></td>
                                            <td><?php echo e($mah->Alamat); ?></td>
                                            <td><?php echo e($mah->Kota); ?></td>
                                            <td><?php echo e($mah->Asal_Sekolah); ?></td>
                                            <td><?php echo e($mah->No_HP); ?></td>
                                            <td><?php echo e($mah->TTL); ?></td>
                                            <td><?php echo e($mah->Kode_Prodi); ?></td>
                                            <td style="text-align:center">
                                                <a href="/formcustomer/edit/<?php echo e($mah->id_mahasiswa); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                <form action="/customer/<?php echo e($mah->id_mahasiswa); ?>" method="post" class="d-inline">
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
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- .content -->
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
    

    <script type="text/javascript"> 
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\alfath\resources\views/users/customer/customer.blade.php ENDPATH**/ ?>