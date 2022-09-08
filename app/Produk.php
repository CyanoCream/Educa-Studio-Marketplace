<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guard = [];

    protected $table = 'tbl_produks';
    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga_produk',
        'status_pertemuan',
        'stock',
        'pertemuan',
        'waktu_temu',
        'umur',
        'keterangan',
        'manfaat',
        'bundling',

    ];

    /**
     * Get the user that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penyelenggara()
    {
        return $this->hasMany('App\Penyelenggara','id_produk');
    }


    /**
     * Get all of the gambar for the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gambar()
    {
        return $this->hasMany('App\Gambar', 'id_produk');
    }
}
