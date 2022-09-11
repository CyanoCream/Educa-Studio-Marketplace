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
    return view('admin.master');
});

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/katalog', function () {
    return view('katalog.index');
})->name('katalog.index');
Route::get('/katalog/aktivitas', function () {
    return view('katalog.aktivitas');
})->name('aktivitas');
Route::get('/kursus', function () {
    return view('katalog.kursus');
})->name('kursus');
Route::get('/gratis', function () {
    return view('katalog.gratis');
})->name('gratis');
Route::get('/experience', function () {
    return view('katalog.experience');
})->name('experience');
Route::get('/pilihan', function () {
    return view('katalog.pilihan');
})->name('pilihan');




Route::get('/premium', function () {
    return view('premium.index');
})->name('premium.index');

Route::get('/topup', function () {
    return view('top_up.index');
})->name('topup.index');


Route::get('/produk-detail/{id}','ProdukController@show')->name('produk-detail');

Route::get('/akun', function () {
    return view('akun.index');
})->name('akun.index');


Route::get('/daftar', function () {
    return view('akun.daftar');
})->name('daftar');

Auth::routes();

// home admin
Route::get('/home', 'AdminHomeController@index')->name('dashboard');

Auth::routes();

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::post('/logout', 'LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'AdminHomeController@index')->name('home');
Route::get('/countproduk', 'AdminHomeController@CountProduk')->name('countProduk');

Route::get('produk-detail/{id}', 'ProdukController@show');

Route::post('peserta', 'PesertaController@getPeserta')->name('peserta');

Route::get('/pesanan', 'OrderController@index')->name('pesanan.index');
Route::get('/pesanan/invoice', 'OrderController@invoice')->middleware('auth')->name('pesanan.invoice');

Route::post('checkout/{id}', 'ProdukController@addData')->name('checkout');


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
Route::post('/hubungi_kami/create/user', 'AdminHubungikamiController@userstore')->name('userHubungi_Kami');
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

// pelanggan
Route::get('/pelanggan', 'AdminPelangganController@index')->name('daftarPelanggan');
Route::get('/pelanggan/create', 'AdminPelangganController@create')->name('createPelanggan');
Route::post('/pelanggan/create', 'AdminPelangganController@store')->name('storePelanggan');
Route::get('/pelanggan/{id}/edit', 'AdminPelangganController@edit')->name('editPelanggan');
Route::post('/pelanggan/{id}/edit', 'AdminPelangganController@update')->name('updatePelanggan');
Route::get('/pelanggan/{id}/delete', 'AdminPelangganController@destroy')->name('deletePelanggan');

// penyelenggara
Route::get('/penyelenggara', 'AdminPenyelenggaraController@index')->name('daftarPenyelenggara');
Route::get('/penyelenggara/create', 'AdminPenyelenggaraController@create')->name('createPenyelenggara');
Route::post('/penyelenggara/create', 'AdminPenyelenggaraController@store')->name('storePenyelenggara');
Route::get('/penyelenggara/{penyelenggara}/edit', 'AdminPenyelenggaraController@edit')->name('editPenyelenggara');
Route::post('/penyelenggara/{penyelenggara}/edit', 'AdminPenyelenggaraController@update')->name('updatePenyelenggara');
Route::get('/penyelenggara/{penyelenggara}/delete', 'AdminPenyelenggaraController@destroy')->name('deletePenyelenggara');


//peserta
Route::get('/peserta', 'AdminPesertaController@index')->name('daftarPeserta');
Route::get('/peserta/create', 'AdminPesertaController@create')->name('createPeserta');
Route::post('/peserta/create', 'AdminPesertaController@store')->name('storePeserta');
Route::get('/peserta/{peserta}/edit', 'AdminPesertaController@edit')->name('editPeserta');
Route::post('/peserta/{peserta}/edit', 'AdminPesertaController@update')->name('updatePeserta');
Route::get('/peserta/{peserta}/delete', 'AdminPesertaController@destroy')->name('deletePeserta');


// produk
Route::get('/produk', 'AdminProdukController@index')->name('daftarProduk');
Route::get('/produk/create', 'AdminProdukController@create')->name('createProduk');
Route::post('/produk/create', 'AdminProdukController@store')->name('storeProduk');
Route::get('/produk/{produk}/edit', 'AdminProdukController@edit')->name('editProduk');
Route::post('/produk/{produk}/edit', 'AdminProdukController@update')->name('updateProduk');
Route::get('/produk/{produk}/delete', 'AdminProdukController@destroy')->name('deleteProduk');

//ulasan
Route::get('/ulasan', 'AdminUlasanController@index')->name('daftarUlasan');
Route::get('/ulasan/create', 'AdminUlasanController@create')->name('createUlasan');
Route::post('/ulasan/create', 'AdminUlasanController@store')->name('storeUlasan');
Route::get('/ulasan/{ulasan}/edit', 'AdminUlasanController@edit')->name('editUlasan');
Route::post('/ulasan/{ulasan}/edit', 'AdminUlasanController@update')->name('updateUlasan');
Route::get('/ulasan/{ulasan}/delete', 'AdminUlasanController@destroy')->name('deleteUlasan');

//user
Route::get('/user', 'AdminUserController@index')->name('daftarUser');
Route::get('/user/create', 'AdminUserController@create')->name('createUser');
Route::post('/user/create', 'AdminUserController@store')->name('storeUser');
Route::get('/user/{user}/edit', 'AdminUserController@edit')->name('editUser');
Route::post('/user/{user}/edit', 'AdminUserController@update')->name('updateUser');
Route::post('/user/{user}/update', 'AdminUserController@userupdate')->name('userUpdate');
Route::get('/user/{user}/delete', 'AdminUserController@destroy')->name('deleteUser');