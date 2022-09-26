<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $table = 'tbl_tentang';
    protected $fillable = [
        'gambar',
        'keterangan',
        'judul',
        

        

    ];
}
