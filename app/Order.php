<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'tbl_orders';

    protected $fillable = [
        // 'id_user',
        'status_order',
        'id_produk',
        'id_penyelenggara',
        'id_pelanggan',
        'status_order',
        'jumlah_harga',
        'kurir',
        'alamat_pen',
    ];
         /**
      * Get the produk that owns the Aktivitas
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
      public function produk()
      {
          return $this->BelongsTo('App\Produk','id_produk','id');
      }

      public function gambar()
      {
          return $this->belongsTo('App\Produk','id_produk','id');
      }

           /**
      * Get the produk that owns the Aktivitas
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
    //  public function pelanggan(): BelongsTo
    //  {
    //      return $this->belongsTo('App\Pelanggan','id_pelanggan');
    //  }

     /**
      * Get the user that owns the Order
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function penyelenggara(): BelongsTo
     {
         return $this->belongsTo('App\Penyelenggara','id_penyelenggara');
     }

          public function user(): BelongsTo
     {
         return $this->belongsTo('App\User','id_user');
     }
}
