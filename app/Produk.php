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
    public function penyelenggara(): BelongsTo
    {
        return $this->belongsTo('App\Penyelenggara','id_penyelenggara');
    }

    /**
     * Get the kategori that owns the Produk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo('App\Kategori','id_kategori');
    }
    
}
