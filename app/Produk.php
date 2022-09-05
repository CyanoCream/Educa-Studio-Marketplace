<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guard = [];

    protected $table = 'produks';
    protected $fillable = [
        'id_kategori',
        'nama_produk',
        'harga_produk',
        'status_pertemuan',
        'stock',
        'pertemuan',
        'waktu_temu',
        'umur',
        'keterangan',
        'manfaat',
        'bundling',
        // 'id_penyelenggara',
        // 'tgl_produk_publish',
        // 'nama_kategori',
        // 'nama_penyelenggara',
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
     * Get the kategori that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori');
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
