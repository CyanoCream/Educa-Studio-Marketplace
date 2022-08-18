<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'pesertas';
    protected $fillable = [
        'id_produk',
        'tgl_pembayaran',
        'jumlah_dana',
        'nama_peserta',
        'nama_panggilan',
        'jenis_kelamin',
        'hubungan',
    ];
    /**
     * Get the produk that owns the Peserta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk(): BelongsTo
    {
        return $this->belongsTo('App\Produk','id_produk');
    }
}
