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
        'email_pelanggan',
        'password',
        'no_telp',
        'alamat_pel',
        'provinsi_pel',
        'kota_pel',
        'kecamatan_pel',
        'level_user' ,
    ];

    // protected $guarded = [];
}
