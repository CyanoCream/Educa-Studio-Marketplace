<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table ='ulasans';
    protected $fillable = [
        'penilaian',
    ];
}
