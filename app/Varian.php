<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    protected $table = 'varians';

    protected $fillable = [
        'id_produk',
        'nama_varian',
        'stock_varian',

    ];
    /**
     * Get the user that owns the Varian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }
}
