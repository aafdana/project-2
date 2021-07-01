@extends('layouts.master')

@section('content')
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
                                    @foreach ($customer as $mah)
                                        <tr>
                                            <td>{{$mah->id_mahasiswa}}</td>
                                            <td>{{$mah->NIM}}</td>
                                            <td>{{$mah->Nama_Mahasiswa}}</td>
                                            <td>{{$mah->Jenis_Kelamin}}</td>
                                            <td>{{$mah->Alamat}}</td>
                                            <td>{{$mah->Kota}}</td>
                                            <td>{{$mah->Asal_Sekolah}}</td>
                                            <td>{{$mah->No_HP}}</td>
                                            <td>{{$mah->TTL}}</td>
                                            <td>{{$mah->Kode_Prodi}}</td>
                                            <td style="text-align:center">
                                                <a href="/formcustomer/edit/{{$mah->id_mahasiswa}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                <form action="/customer/{{$mah->id_mahasiswa}}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- .content -->
@endsection
    @section('script')
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
    @endsection