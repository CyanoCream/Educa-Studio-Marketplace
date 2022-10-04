<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama_produk' => $faker->name,
        'kategori' => 'pilihan',
        'harga_poduk' => '5000', // secret
        'status_pertemuan' => 'online',
        'stock'=> 50,
        'pertemuan' => '2x',
        'waktu_temu' => 30,
        'umur' => '4 Tahun',
        'keterangan' => 'p',
        'manfaat' => 'p',
        'building' => 'p',
        'user_id' => 1,
    ];
});
