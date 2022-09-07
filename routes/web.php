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
Route::get('/dashboard', function () {
    return view('admin.dashboard2');
})->name('admin');

Route::get('/penyelenggara', function () {
    return view('penyelenggara.penyelenggara');
})->name('penyelenggara');

Route::get('/penyelenggara-gambar', function () {
    return view('penyelenggara.gambar');
});

Route::get('/penyelenggara-kategori', function () {
    return view('penyelenggara.kategori');
});

Route::get('/penyelenggara-produk', function () {
    return view('penyelenggara.produk');
});


Route::get('/', function () {
    return view('layout.master');
});

Route::get('/katalog', function () {
    return view('katalog.index');
})->name('katalog.index');



Route::get('/premium', function () {
    return view('premium.index');
})->name('premium.index');

Route::get('/topup', function () {
    return view('top_up.index');
})->name('topup.index');



// Route::get('/produk-detail/{id}', function () {
//     return view('produk_detail.index');
//     console.log(id);
// })->name('produk-detail');

Route::get('/produk-detail/{id}','ProdukController@show')->name('produk-detail');

Route::get('/akun', function () {
    return view('akun.index');
})->name('akun.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::post('/logout', 'LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('produk-detail/{id}', 'ProdukController@show');

Route::post('peserta', 'PesertaController@getPeserta')->name('peserta');

Route::get('/pesanan', 'OrderController@index')->name('pesanan.index');
Route::get('/pesanan/invoice', 'OrderController@invoice')->middleware('auth')->name('pesanan.invoice');

Route::post('checkout/{id}', 'ProdukController@addData')->name('checkout');


<<<<<<< HEAD
Route::get('/Penyelenggara', function () {
    return view('Penyelenggara.penyelenggara');
})->name('Penyelenggara');

Route::get('/Penyelenggara-gambar', function () {
    return view('Penyelenggara.gambar');
});

Route::get('/Penyelenggara-kategori', function () {
    return view('Penyelenggara.kategori');
});

Route::get('/Penyelenggara-produk', function () {
    return view('Penyelenggara.produk');
});

// detail_order
Route::get('/detail_order', 'AdminDetailOrderController@index')->name('daftarDetail_Order');
Route::get('/detail_order/create', 'AdminDetailOrderController@create')->name('createDetail_Order');
Route::post('/detail_order/create', 'AdminDetailOrderController@store')->name('storeDetail_Order');
Route::get('/detail_order/{detail_order}/edit', 'AdminDetailOrderController@edit')->name('editDetail_Order');
Route::post('/detail_order/{detail_order}/edit', 'AdminDetailOrderController@update')->name('updateDetail_Order');
Route::get('/detail_order/{detail_order}/delete', 'AdminDetailOrderController@destroy')->name('deleteDetail_Order');

// gambar
Route::get('/gambar', 'AdminGambarController@index')->name('daftarGambar');
Route::get('/gambar/create', 'AdminGambarController@create')->name('createGambar');
Route::post('/gambar/create', 'AdminGambarController@store')->name('storeGambar');
Route::get('/gambar/{gambar}/edit', 'AdminGambarController@edit')->name('editGambar');
Route::post('/gambar/{gambar}/edit', 'AdminGambarController@update')->name('updateGambar');
Route::get('/gambar/{gambar}/delete', 'AdminGambarController@destroy')->name('deleteGambar');

// hubungi_kami
Route::get('/hubungi_kami', 'AdminHubungikamiController@index')->name('daftarHubungi_Kami');
Route::get('/hubungi_kami/create', 'AdminHubungikamiController@create')->name('createHubungi_Kami');
Route::post('/hubungi_kami/create', 'AdminHubungikamiController@store')->name('storeHubungi_Kami');
Route::get('/hubungi_kami/{hubungi_kami}/edit', 'AdminHubungikamiController@edit')->name('editHubungi_Kami');
Route::post('/hubungi_kami/{hubungi_kami}/edit', 'AdminHubungikamiController@update')->name('updateHubungi_Kami');
Route::get('/hubungi_kami/{hubungi_kami}/delete', 'AdminHubungikamiController@destroy')->name('deleteHubungi_Kami');

// kategori
Route::get('/kategori', 'AdminKategoriController@index')->name('daftarKategori');
Route::get('/kategori/create', 'AdminKategoriController@create')->name('createKategori');
Route::post('/kategori/create', 'AdminKategoriController@store')->name('storeKategori');
Route::get('/kategori/{kategori}/edit', 'AdminKategoriController@edit')->name('editKategori');
Route::post('/kategori/{kategori}/edit', 'AdminKategoriController@update')->name('updateKategori');
Route::get('/kategori/{kategori}/delete', 'AdminKategoriController@destroy')->name('deleteKategori');

// keranjang
Route::get('/keranjang', 'AdminKeranjangController@index')->name('daftarKeranjang');
Route::get('/keranjang/create', 'AdminKeranjangController@create')->name('createKeranjang');
Route::post('/keranjang/create', 'AdminKeranjangController@store')->name('storeKeranjang');
Route::get('/keranjang/{keranjang}/edit', 'AdminKeranjangController@edit')->name('editKeranjang');
Route::post('/keranjang/{keranjang}/edit', 'AdminKeranjangController@update')->name('updateKeranjang');
Route::get('/keranjang/{keranjang}/delete', 'AdminKeranjangController@destroy')->name('deleteKeranjang');

// order
Route::get('/order', 'AdminOrderController@index')->name('daftarOrder');
Route::get('/order/create', 'AdminOrderController@create')->name('createOrder');
Route::post('/order/create', 'AdminOrderController@store')->name('storeOrder');
Route::get('/order/{order}/edit', 'AdminOrderController@edit')->name('editOrder');
Route::post('/order/{order}/edit', 'AdminOrderController@update')->name('updateOrder');
Route::get('/order/{order}/delete', 'AdminOrderController@destroy')->name('deleteOrder');
=======
>>>>>>> d8b2103e5bf4d965826f46ab04e86cb42fa7af88

// pelanggan
Route::get('/pelanggan', 'PelangganController@index')->name('daftarPelanggan');
Route::get('/pelanggan/create', 'PelangganController@create')->name('createPelanggan');
Route::post('/pelanggan/create', 'PelangganController@store')->name('storePelanggan');
Route::get('/pelanggan/{pelanggan}/edit', 'PelangganController@edit')->name('editPelanggan');
Route::post('/pelanggan/{pelanggan}/edit', 'PelangganController@update')->name('updatePelanggan');
Route::get('/pelanggan/{pelanggan}/delete', 'PelangganController@destroy')->name('deletePelanggan');

// order
// Route::get('/order', 'OrderController@index')->name('daftarOrder');
// Route::get('/order/create', 'OrderController@create')->name('createOrder');
// Route::post('/order/create', 'OrderController@store')->name('storeOrder');
// Route::get('/order/{order}/edit', 'OrderController@edit')->name('editOrder');
// Route::post('/order/{order}/edit', 'OrderController@update')->name('updateOrder');
Route::get('/order/{order}/delete', 'OrderController@destroy')->name('deleteOrder');


//peserta
Route::get('/peserta', 'PesertaController@index')->name('daftarPeserta');
Route::get('/peserta/create', 'PesertaController@create')->name('createPeserta');
Route::post('/peserta/create', 'PesertaController@store')->name('storePeserta');
Route::get('/peserta/{peserta}/edit', 'PesertaController@edit')->name('editPeserta');
Route::post('/peserta/{peserta}/edit', 'PesertaController@update')->name('updatePeserta');
Route::get('/peserta/{peserta}/delete', 'PesertaController@destroy')->name('deletePeserta');
