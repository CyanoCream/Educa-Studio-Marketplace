<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambars';
    protected $fillable = [
        'gambar',
        'id_produk',

        

    ];
         /**
      * Get the produk that owns the Aktivitas
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
      public function produk(): BelongsTo
      {
          return $this->belongsTo('App\Produk','id_produk');
      }
}
