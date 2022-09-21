<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home', function() {
    return view('layout.master');
});
Route::get('/katalog', function() {
    return view('katalog.index');
});
Route::get('/pesanan', function() {
    return view('pesanan.index');
});
Route::get('/premium', function() {
    return view('premium.index');
});
Route::get('/top_up', function() {
    return view('top_up.index');
});
Route::get('/akun', function() {
    return view('akun.index');
});




// Tabel-Produk
Route::get('/get-detail-produk/{id}', 'ProdukController@getDetailProduk');
Route::get('/get-produk', 'ProdukController@getProduk');
Route::get('/get-produk-limited', 'ProdukController@getProdukLimited');
Route::get('/get-produk-new', 'ProdukController@getProdukNew');
Route::get('/get-produk-popular', 'ProdukController@getProdukPopular');
Route::get('/get-produk-pilihan', 'ProdukController@getProdukPilihan');
Route::get('/get-produk-aktivitas', 'ProdukController@getProdukAktivitas');
Route::get('/get-produk-kursus', 'ProdukController@getProdukKursus');
Route::get('/get-produk-Experience', 'ProdukController@getProdukExperience');
Route::get('/get-produk-kesehatan', 'ProdukController@getProdukKesehatan');
Route::get('/get-produk-gratis', 'ProdukController@getProdukGratis');
Route::post('/insert-produk', 'ProdukController@insertProduk');
Route::get('delete-produk', 'ProdukController@deleteProduk');
Route::get('/edit-produk/{id}', 'ProdukController@editProduk');
Route::get('/produk-detail','ProdukController@show');


// Tabel-Pelanggan
Route::get('/get-pelanggan', 'PelangganController@getPelanggan');
Route::post('/insert-pelanggan', 'PelangganController@insertPelanggan');
Route::get('/delete-pelanggan/{id}', 'PelangganController@deletePelanggan');
Route::get('/edit-pelanggan{id}', 'PelangganController@editPelanggan');

// Tabel-Keranjang
Route::get('/get-pesanan', 'KeranjangController@getKeranjang');
Route::post('/insert-pesanan', 'KeranjangController@insertKeranjang');
Route::get('/delete-pesanan/{id}', 'KeranjangController@deleteKeranjang');
Route::get('/edit-pesanan{id}', 'KeranjangController@editKeranjang');

// Dasboard-admin
Route::get('/get-users', 'AdminHomeController@getUser');
Route::get('/get-order', 'AdminOrderController@getOrder');

// Tabel-Order
Route::get('/get-pesanan', 'OrderController@getOrder');
Route::post('/insert-pesanan', 'OrderController@insertOrder');
Route::get('/delete-pesanan/{id}', 'OrderController@deleteOrder');
Route::get('/edit-pesanan{id}', 'OrderController@editOrder');
// Route::get('/pesanan/cek', 'OrderController@navindex');

// Tabel-Penyelenggara
Route::get('/get-penyelenggara', 'PenyelenggaraController@getPenyelenggara');
Route::post('/insert-penyelenggara', 'OrderController@insertPenyelenggara');
Route::get('/delete-penyelenggara/{id}', 'PenyelenggaraController@deletePenyelenggara');
Route::get('/edit-penyelenggara{id}', 'PenyelenggaraController@editPenyelenggara');

// Tabel-Peserta
Route::get('/get-peserta', 'PesertaController@getPeserta');
Route::post('/insert-peserta', 'PesertaController@insertPeserta');
Route::get('/delete-peserta/{id}', 'PesertaController@deletePeserta');
Route::get('/edit-peserta{id}', 'PesertaController@editPeserta');

//Tabel-Pivot_Ulasan
Route::get('/get-pivot_ulasan', 'PivotUlasanController@getPivotUlasan');
Route::post('/insert-pivot_ulasan', 'PivotUlasanController@insertPivotUlasan');
Route::get('/delete-pivot_ulasan/{id}', 'PivotUlasanController@deletePivotUlasan');
Route::get('/edit-pivot_ulasan{id}', 'PivotUlasanController@editPivotUlasan');

//Tabel-Ulasan
Route::get('/get-ulasan', 'UlasanController@getUlasan');
Route::post('/insert-ulasan', 'UlasanController@insertUlasan');
Route::get('/delete-ulasan/{id}', 'UlasanController@deleteUlasan');
Route::get('/edit-ulasan{id}', 'UlasanController@editUlasan');

// //Tabel-Varian
// Route::get('/get-varian', 'VarianController@getVarian');
// Route::post('/insert-varian', 'VarianController@insertVarian');
// Route::get('/delete-varian/{id}', 'VarianController@deleteVarian');
// Route::get('/edit-varian{id}', 'VarianController@editVarian');

// Tabel-Gambar
Route::get('/gambar', 'GambarController@index');
Route::get('/get-gambar', 'GambarController@getGambar');
Route::get('/gambar-create', 'GambarController@create');
Route::post('/gambar', 'GambarController@store');
Route::get('/gambar/{gambar}', 'GambarController@show');
Route::get('/gambar/{gambar}/edit', 'GambarController@edit');
Route::put('/gambar/{gambar}', 'GambarController@update');
Route::delete('/gambar/{gambar}', 'GambarController@destroy');
Route::get('/gambar/get-cover-image/{id}', 'GambarController@getGambarImg');