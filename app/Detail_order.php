<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    protected $table ='tbl_detail_orders';
    protected $fillable = [
        'id_order',
        'id_produk',
        'nama_produk',
        'harga',
        'kurir',
        'jumlah',
        'total_harga',
       
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
       * Get the user that owns the Detail_order
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function order(): BelongsTo
      {
          return $this->belongsTo('App\Order','id_order');
      }

      /**
       * Get the user that owns the Detail_order
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function varian(): BelongsTo
      {
          return $this->belongsTo('App\Varian','id_varian_order');
      }
}
