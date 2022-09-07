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
