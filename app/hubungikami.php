<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hubungikami extends Model
{
    protected $table = 'hubungikamis';
    protected $fillable = [
        'id_pelanggan',
        'nama',
        'email',
        'nomorponsel',
        'topik',
        'pesan',
    ];
    /**
     * Get the user that owns the hubungikami
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo('App\Pelanggan','id_pelanggan');
    }
}
