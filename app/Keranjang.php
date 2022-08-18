<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjangs';

    protected $fillable = [
        'waktu',
        'qty_ker',
        'id_produk',
        'nama_produk',
        'harga_produk',
        'varian_produk',
        'packing',

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
