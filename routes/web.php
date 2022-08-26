<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.master');
});

// Route::get('layout', function () {
//     return view('layout.master');
// })->name('layout.master');

// Route::get('premium', function () {
//     return view('premium.index');
// })->name('premium.index');

// Route::get('katalog', function () {
//     return view('katalog.index');
// })->name('katalog.index');
// Route::prefix('katalog')->group(function () {
//     Route::get('aktivitas', function () {
//         return view('katalog.aktivitas');
//     })->name('katalog.aktivitas');
//     Route::get('kursus', function () {
//         return view('katalog.kursus');
//     })->name('katalog.kursus');
//     Route::get('experience', function () {
//         return view('katalog.experience');
//     })->name('katalog.experience');
//     Route::get('activity_kit', function () {
//         return view('katalog.activity_kit');
//     })->name('katalog.activity_kit');
//     Route::get('gratis', function () {
//         return view('katalog.gratis');
//     })->name('katalog.gratis');
// });

// Route::get('pesanan', function () {
//     return view('pesanan.index');
// })->name('pesanan.index');
// Route::prefix('pesanan')->group(function () {
//     Route::get('keranjang', function () {
//         return view('pesanan.keranjang');
//     })->name('pesanan.keranjang');  
//     Route::get('tiket', function () {
//         return view('pesanan.tiket');
//     })->name('pesanan.tiket');    
//     Route::get('riwayat_pemesanan', function () {
//         return view('pesanan.riwayat_pemesanan');
//     })->name('pesanan.riwayat_pemesanan');    
// });

// Route::get('akun', function () {
//     return view('akun.index');
// })->name('akun.index');
// Route::prefix('akun')->group(function () {
//     Route::get('orders', function () {
//         return view('akun.orders');
//     })->name('akun.orders');  
//     Route::get('addresses', function () {
//         return view('akun.addresses');
//     })->name('akun.addresses');    
//     Route::get('account_details', function () {
//         return view('akun.account_details');
//     })->name('akun.account_details'); 
//     Route::get('logout', function () {
//         return view('akun.logout');
//     })->name('akun.logout');    
// });

Route::get('top_up', function () {
    return view('top_up.index');
})->name('top_up.index');
// Route::prefix('top_up')->group(function () {
//     Route::get('top_up', function () {
//     return view('top_up.paket_data');
// })->name('top_up.paket_data');
// });

// Route::get('pengiriman', function () {
//     return view('pengiriman');
// });

// Route::get('/', function () {
//     return redirect(route('login'));
// });

// Route::get('product_detail', function () {
//     return view('product_detail.index');
// })->name('product_detail.index');

// home admin
Route::get('/home', 'HomeController@index')->name('dashboard');

// detail_order
Route::get('/detail_order', 'DetailOrderController@index')->name('daftarDetail_Order');
Route::get('/detail_order/create', 'DetailOrderController@create')->name('createDetail_Order');
Route::post('/detail_order/create', 'DetailOrderController@store')->name('storeDetail_Order');
Route::get('/detail_order/{detail_order}/edit', 'DetailOrderController@edit')->name('editDetail_Order');
Route::post('/detail_order/{detail_order}/edit', 'DetailOrderController@update')->name('updateDetail_Order');
Route::get('/detail_order/{detail_order}/delete', 'DetailOrderController@destroy')->name('deleteDetail_Order');

// gambar
Route::get('/gambar', 'GambarController@index')->name('daftarGambar');
Route::get('/gambar/create', 'GambarController@create')->name('createGambar');
Route::post('/gambar/create', 'GambarController@store')->name('storeGambar');
Route::get('/gambar/{gambar}/edit', 'GambarController@edit')->name('editGambar');
Route::post('/gambar/{gambar}/edit', 'GambarController@update')->name('updateGambar');
Route::get('/gambar/{gambar}/delete', 'GambarController@destroy')->name('deleteGambar');

// hubungi_kami
Route::get('/hubungi_kami', 'HubungikamiController@index')->name('daftarHubungi_Kami');
Route::get('/hubungi_kami/create', 'HubungikamiController@create')->name('createHubungi_Kami');
Route::post('/hubungi_kami/create', 'HubungikamiController@store')->name('storeHubungi_Kami');
Route::get('/hubungi_kami/{hubungi_kami}/edit', 'HubungikamiController@edit')->name('editHubungi_Kami');
Route::post('/hubungi_kami/{hubungi_kami}/edit', 'HubungikamiController@update')->name('updateHubungi_Kami');
Route::get('/hubungi_kami/{hubungi_kami}/delete', 'HubungikamiController@destroy')->name('deleteHubungi_Kami');

// kategori
Route::get('/kategori', 'KategoriController@index')->name('daftarKategori');
Route::get('/kategori/create', 'KategoriController@create')->name('createKategori');
Route::post('/kategori/create', 'KategoriController@store')->name('storeKategori');
Route::get('/kategori/{kategori}/edit', 'KategoriController@edit')->name('editKategori');
Route::post('/kategori/{kategori}/edit', 'KategoriController@update')->name('updateKategori');
Route::get('/kategori/{kategori}/delete', 'KategoriController@destroy')->name('deleteKategori');

// keranjang
Route::get('/keranjang', 'KeranjangController@index')->name('daftarKeranjang');
Route::get('/keranjang/create', 'KeranjangController@create')->name('createKeranjang');
Route::post('/keranjang/create', 'KeranjangController@store')->name('storeKeranjang');
Route::get('/keranjang/{keranjang}/edit', 'KeranjangController@edit')->name('editKeranjang');
Route::post('/keranjang/{keranjang}/edit', 'KeranjangController@update')->name('updateKeranjang');
Route::get('/keranjang/{keranjang}/delete', 'KeranjangController@destroy')->name('deleteKeranjang');

// order
Route::get('/order', 'OrderController@index')->name('daftarOrder');
Route::get('/order/create', 'OrderController@create')->name('createOrder');
Route::post('/order/create', 'OrderController@store')->name('storeOrder');
Route::get('/order/{order}/edit', 'OrderController@edit')->name('editOrder');
Route::post('/order/{order}/edit', 'OrderController@update')->name('updateOrder');
Route::get('/order/{order}/delete', 'OrderController@destroy')->name('deleteOrder');

// pelanggan
Route::get('/pelanggan', 'PelangganController@index')->name('daftarPelanggan');
Route::get('/pelanggan/create', 'PelangganController@create')->name('createPelanggan');
Route::post('/pelanggan/create', 'PelangganController@store')->name('storePelanggan');
Route::get('/pelanggan/{pelanggan}/edit', 'PelangganController@edit')->name('editPelanggan');
Route::post('/pelanggan/{pelanggan}/edit', 'PelangganController@update')->name('updatePelanggan');
Route::get('/pelanggan/{pelanggan}/delete', 'PelangganController@destroy')->name('deletePelanggan');

// penyelenggara
Route::get('/penyelenggara', 'PenyelenggaraController@index')->name('daftarPenyelenggara');
Route::get('/penyelenggara/create', 'PenyelenggaraController@create')->name('createPenyelenggara');
Route::post('/penyelenggara/create', 'PenyelenggaraController@store')->name('storePenyelenggara');
Route::get('/penyelenggara/{penyelenggara}/edit', 'PenyelenggaraController@edit')->name('editPenyelenggara');
Route::post('/penyelenggara/{penyelenggara}/edit', 'PenyelenggaraController@update')->name('updatePenyelenggara');
Route::get('/penyelenggara/{penyelenggara}/delete', 'PenyelenggaraController@destroy')->name('deletePenyelenggara');


//peserta
Route::get('/peserta', 'PesertaController@index')->name('daftarPeserta');
Route::get('/peserta/create', 'PesertaController@create')->name('createPeserta');
Route::post('/peserta/create', 'PesertaController@store')->name('storePeserta');
Route::get('/peserta/{peserta}/edit', 'PesertaController@edit')->name('editPeserta');
Route::post('/peserta/{peserta}/edit', 'PesertaController@update')->name('updatePeserta');
Route::get('/peserta/{peserta}/delete', 'PesertaController@destroy')->name('deletePeserta');


// produk
Route::get('/produk', 'ProdukController@index')->name('daftarProduk');
Route::get('/produk/create', 'ProdukController@create')->name('createProduk');
Route::post('/produk/create', 'ProdukController@store')->name('storeProduk');
Route::get('/produk/{produk}/edit', 'ProdukController@edit')->name('editProduk');
Route::post('/produk/{produk}/edit', 'ProdukController@update')->name('updateProduk');
Route::get('/produk/{produk}/delete', 'ProdukController@destroy')->name('deleteProduk');

//ulasan
Route::get('/ulasan', 'UlasanController@index')->name('daftarUlasan');
Route::get('/ulasan/create', 'UlasanController@create')->name('createUlasan');
Route::post('/ulasan/create', 'UlasanController@store')->name('storeUlasan');
Route::get('/ulasan/{ulasan}/edit', 'UlasanController@edit')->name('editUlasan');
Route::post('/ulasan/{ulasan}/edit', 'UlasanController@update')->name('updateUlasan');
Route::get('/ulasan/{ulasan}/delete', 'UlasanController@destroy')->name('deleteUlasan');