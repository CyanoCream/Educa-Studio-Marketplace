<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $fillable = [
        'foto',
        'waktu_daftar',
        'nama_pelanggan',
        'email',
        'password',
        'remember_token',
        'no_telp',
        'alamat_pel',
        'provinsi_pel',
        'kota_pel',
        'kecamatan_pel',
<<<<<<< HEAD
        'level_user',
=======
        'level_user' ,
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
    ];

    // protected $guarded = [];
}
