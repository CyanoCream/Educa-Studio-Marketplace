<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyelenggara extends Model
{
    protected $table = 'tbl_penyelenggaras';

    protected $fillable = [
        'id_produk',
        'icon_penyelenggara',
        'nama_penyelenggara',
        'kota_penyelenggara',
        'deskripsi',
        'jam_operasional',
    ];

    /**
     * Get the user that owns the Penyelenggara
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo('App\Produk','id_produk');
    }
}
