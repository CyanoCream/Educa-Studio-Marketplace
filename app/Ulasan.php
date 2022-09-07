<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table ='ulasan';
    protected $fillable = [
        'nama',
        'email',
        'penilaian',
    ];
}
