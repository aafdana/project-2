

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Edit Mahasiwa</div>
                            <div class="card-body card-block">
                                <label for="" style="color:grey"></label>
                                <form action="/edit/<?php echo e($customer->id_mahasiswa); ?>" method="post">
                                    <div class="form-group">
                                        <?php echo e(csrf_field()); ?>        
                                           <!-- <input type="text" class="form-control" name="SUMBER_DANA" placeholder="" hidden>
                                            <input type="text" class="form-control" name="NAMA_IBU" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PEKERJAAN" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PENGHASILAN_BULANAN" placeholder="" hidden>  -->

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">NIM </label>
                                                <input type="text" class="form-control" name="NIM"
                                                    placeholder="" value="<?php echo e($customer->NIM); ?>" required>

                                                    <!-- /.inputan nama -->
                                            </div>

                                            <!-- <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Tempat Lahir*</label>
                                                <input type="text" class="form-control" name="TEMPAT_LAHIR"
                                                    placeholder="" required>
                                                
                                            </div>     -->
                                                <!-- /.inputan TEMPAAT LAHIR-->
                                        </div>
                                    </div>    

                                    <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nama Mahasiswa (Sesuai KTM)</label>
                                                <input type="text" class="form-control" name="Nama_Mahasiswa"
                                                    placeholder="" value="<?php echo e($customer->Nama_Mahasiswa); ?>" required>    
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Jenis Kelamin</label>
                                                <input type="text" class="form-control" name="Jenis_Kelamin"
                                                    placeholder="" value="<?php echo e($customer->Jenis_Kelamin); ?>" required>    
                                            </div>    
                                    </div>    

                                    <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Kota</label>
                                                <input type="text" class="form-control" name="Kota" value="<?php echo e($customer->Kota); ?>">    
                                            </div>
                                    </div>

                                <!--<div class="row form-group">
                                        <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Tanggal Lahir*</label>
                                                <input type="date" class="form-control" name="TANGGAL_LAHIR"
                                                    placeholder="" required>
                                                
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nama Ibu Kandung*</label>
                                                <input type="text" class="form-control" name="NAMA_IBU_KANDUNG"
                                                    placeholder="" required>
                                                
                                    </div>
                                </div> -->
                                
                                       

                                <!--<div class="row form-group">
                                        <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Sumber Dana*</label>
                                                <input type="text" class="form-control" name="SUMBER_DANA"
                                                    placeholder="(Gaji, Tabungan, Hasil Usaha, Lainnya)" required>
                                        </div>
                                        <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Pekerjaan*</label>
                                                <input type="text" class="form-control" name="PEKERJAAN"
                                                    placeholder="(TNI/POLRI, Karyawan BUMN, Karyawan Swasta, Pelajar/Mahasiswa, Lainnya)" required>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Penghasilan Bulanan*</label>
                                                <input type="text" class="form-control" name="PENGHASILAN_BULANAN"
                                                    placeholder="" required>
                                        </div>
                                    </div> -->

                                <div class="row form-group">
                                    <div class="col-md-8">
                                                <label for="exampleFormControlInput1">Alamat</label>
                                                <input type="text" class="form-control" name="Alamat"
                                                    placeholder="" value="<?php echo e($customer->Alamat); ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Asal Sekolah</label>
                                                <input type="text" class="form-control" name="Asal_Sekolah" value="<?php echo e($customer->Asal_Sekolah); ?>">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">No.HP</label>
                                                <input type="text" class="form-control" name="No_HP" value="<?php echo e($customer->No_HP); ?>">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">TTL</label>
                                                <input type="text" class="form-control" name="TTL" value="<?php echo e($customer->TTL); ?>">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Kode Prodi</label>
                                                <input type="text" class="form-control" name="Kode_Prodi" value="<?php echo e($customer->Kode_Prodi); ?>">    
                                    </div>
                                </div>

                                    <div class="form-actions form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/js/regionalselect-customer.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\alfath\resources\views/users/customer/editmahasiswa.blade.php ENDPATH**/ ?>