<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivot_ulasan extends Model
{
    protected $table = 'tbl_pivot_ulasan';
    protected $fillable = [
        'id_ulasan',
        'id_produk',
        'id_pelanggan',
    ];

    /**
     * Get the user that owns the Pivot_ulasan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo('App\Pelanggan','id_pelanggan');
    }

    /**
     * Get the user that owns the Pivot_ulasan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ulasan(): BelongsTo
    {
        return $this->belongsTo('App\Ulasan','id_ulasan');
    }

    /**
     * Get the user that owns the Pivot_ulasan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo('App\Produk','id_produk');
    }
}
