<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Str;

class RegisterCustomerController extends Controller
{
    //
    public function index (){
        $user = User::paginate(200);
        return view ('user',compact('user'));
    }

    

    public function storeCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->save();

        User::create([
            'role' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    // public function create()
    // {   $provinsi = Provinsi::pluck('NAMA_PROVINSI','ID_PROVINSI');
    //     return view('/formpetani',compact('provinsi'));
    // }

    
    // Function Form Customer
    public function index_Customer(){
        $customer = Customer::paginate(150);
        return view ('users.customer.customer', compact('customer'));
    }
    public function createCustomer()
    {
        return view('users.customer.formcustomer');
    }
    public function store(Request $request)
    {Customer::create([
        'NIM' => $request->NIM,
            'Nama_Mahasiswa' => $request->Nama_Mahasiswa,
            'Alamat' => $request->Alamat,
            'Kota' => $request->Kota,
            'Asal_Sekolah' => $request->Asal_Sekolah,
            'No_HP' => $request->No_HP,
            'TTL' => $request->TTL,
            'Kode_Prodi' => $request->Kode_Prodi,
        ]);
        return redirect ('/customer')->with('status','Successfully insert data');;
    }
    public function edit_customer(Customer $customer){
        Customer::where('id_mahasiswa', $customer->id_mahasiswa);
        return view ('users.customer.editmahasiswa')->with(compact('customer'));
    }

    public function store_customer(Request $request, Customer $customer){
        Customer::where('id_mahasiswa', $customer->id_mahasiswa)->update([
            'NIM' => $request->NIM,
            'Nama_Mahasiswa' => $request->Nama_Mahasiswa,
            'Alamat' => $request->Alamat,
            'Kota' => $request->Kota,
            'Asal_Sekolah' => $request->Asal_Sekolah,
            'No_HP' => $request->No_HP,
            'TTL' => $request->TTL,
            'Kode_Prodi' => $request->Kode_Prodi,
        ]);
        return view ('users.customer.customer')->with('status','Successfully update data');
    }

    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id_mahasiswa);
        return redirect('/customer')->with('stat_del','Data Berhasil Dihapus!');
    }

}
