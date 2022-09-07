<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table ='tbl_ulasans';
    protected $fillable = [
        'nama',
        'email',
        'penilaian',
    ];
}
