

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Customer</div>
                            <div class="card-body card-block">
                                <label for="" style="color:grey">Field dengan tanda * harus diisi</label>
                                <form action="/tabelcustomer/<?php echo e($customer->ID_CUSTOMER); ?>" method="post">
                                    <div class="form-group">
                                        <?php echo e(csrf_field()); ?>        
                                           <!-- <input type="text" class="form-control" name="SUMBER_DANA" placeholder="" hidden>
                                            <input type="text" class="form-control" name="NAMA_IBU" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PEKERJAAN" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PENGHASILAN_BULANAN" placeholder="" hidden>  -->

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nama Lengkap (Sesuai KTP)*</label>
                                                <input type="text" class="form-control" name="NAMA_CUSTOMER"
                                                    placeholder="" required>

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
                                                <label for="exampleFormControlInput1">Tanggal Lahir*</label>
                                                <input type="date" class="form-control" name="TANGGAL_LAHIR"
                                                    placeholder="" required>    
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Nomor HP*</label>
                                                <input type="text" class="form-control" name="NOHP_CUSTOMER"
                                                    placeholder="" required>    
                                            </div>    
                                    </div>    

                                    <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Email</label>
                                                <input type="text" class="form-control" name="EMAIL_CUSTOMER"
                                                    value="<?php echo e($customer->EMAIL_CUSTOMER); ?>" style="color:grey" readonly>    
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
                                                <label for="exampleFormControlInput1">Alamat*</label>
                                                <input type="text" class="form-control" name="ALAMAT_CUSTOMER"
                                                    placeholder="" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlInput1">Provinsi*</label>
                                        <select class="form-control select-component select-provinsi" id="" name="provinsi" required>
                                            <option>Pilih Provinsi ...</option>
                                            <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>   
                                
                                </div>
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="namakota">Kota*</label>
                                                <select class="form-control select-component select-kota" id="kota" name="kota" required>
                                                    <option>Pilih Kota ...</option>
                                                </select>
                                            </div>                
                                            <div class="col-md-4">
                                                <label for="namakecamatan">Kecamatan*</label>
                                                <select class="form-control select select-kecamatan" id="kecamatan" name="kecamatan" required>
                                                    <option>Pilih Kecamatan ...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="namakelurahan">Kelurahan*</label>
                                                <select class="form-control select select-kelurahan" id="kelurahan" name="kelurahan" required>
                                                    <option>Pilih Kelurahan ...</option>
                                                </select>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/users/customer/formcustomer.blade.php ENDPATH**/ ?>