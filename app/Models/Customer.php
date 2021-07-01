<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_mahasiswa';
	public $incrementing = false;

    protected $table = 'mahasiswa';
    protected $fillable = [
    'id_mahasiswa', 'NIM', 'Nama_Mahasiswa', 'Jenis_kelamin', 'Alamat', 'Kota', 'Asal_Sekolah', 'No_HP', 'TTL', 'Kode_Prodi'
    ];

    
}
