@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                    
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Mahasiwa</div>
                            <div class="card-body card-block">
                                <label for="" style="color:grey">Field dengan tanda * harus diisi</label>
                                <form action="/tabelcustomer" method="post">
                                    <div class="form-group">
                                        {{csrf_field()}}        
                                           <!-- <input type="text" class="form-control" name="SUMBER_DANA" placeholder="" hidden>
                                            <input type="text" class="form-control" name="NAMA_IBU" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PEKERJAAN" placeholder="" hidden>
                                            <input type="text" class="form-control" name="PENGHASILAN_BULANAN" placeholder="" hidden>  -->

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">NIM *</label>
                                                <input type="text" class="form-control" name="NIM"
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
                                                <label for="exampleFormControlInput1">Nama Mahasiswa (Sesuai KTM)*</label>
                                                <input type="text" class="form-control" name="Nama_Mahasiswa"
                                                    placeholder="" required>    
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1">Jenis Kelamin*</label>
                                                <input type="text" class="form-control" name="Jenis_Kelamin"
                                                    placeholder="" required>    
                                            </div>    
                                    </div>    

                                    <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Kota</label>
                                                <input type="text" class="form-control" name="Kota">    
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
                                                <input type="text" class="form-control" name="Alamat"
                                                    placeholder="" required>
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Asal Sekolah</label>
                                                <input type="text" class="form-control" name="Asal_Sekolah">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">No.HP</label>
                                                <input type="text" class="form-control" name="No_HP">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">TTL</label>
                                                <input type="text" class="form-control" name="TTL">    
                                    </div>
                                    <div class="col-md-6">
                                                <label for="exampleFormControlInput1" style="color:grey">Kode Prodi</label>
                                                <input type="text" class="form-control" name="Kode_Prodi">    
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

@endsection
@section('script')
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{asset('assets/js/regionalselect-customer.js')}}"></script>
@endsection