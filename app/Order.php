<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'id_pelanggan',
        'status_order',
        'id_produk',
        'id_penyelenggara',
        'nama_penyelenggara',
        'pengiriman',
        'kurir',
        'alamat_pen',
        'provinsi_pen',
        'kota_pen',
        'kecamatan_pen',

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

           /**
      * Get the produk that owns the Aktivitas
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function pelanggan(): BelongsTo
     {
         return $this->belongsTo('App\Pelanggan','id_pelanggan');
     }

     /**
      * Get the user that owns the Order
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function penyelenggara(): BelongsTo
     {
         return $this->belongsTo('App\Penyelenggara','id_penyelenggara');
     }
}
