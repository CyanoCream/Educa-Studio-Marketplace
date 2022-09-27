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
Route::get('/history', 'DetailOrderController@show')->name('history');
Route::get('/history/desc', 'DetailOrderController@filterhistorydown')->name('desc');
Route::get('/history/asc', 'DetailOrderController@filterhistoryup')->name('asc');
Route::get('/pesanan/desc', 'OrderController@orderup')->name('desc.order');
Route::get('/pesanan/asc', 'OrderController@orderdown')->name('asc.order');

Route::get('/dashboard', function () {
    return view('admin.master');
});

Route::get('/premium', function () {
    return view('premium.index');
})->name('premium.index');

Route::get('/pesanan/cek', function () {
    return view('layout.master');
});
Route::get('/', 'OrderController@navindex')->name('pesanan.cek');
Route::get('/katalog', 'OrderController@nav2index')->name('katalog.index');
Route::get('/pesanan', 'OrderController@navpesanan')->name('pesanan.index');

Route::get('nav', function () {
    return view('katalog.index');
});
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



Route::get('/topup', function () {
    return view('top_up.index');
})->name('topup.index');


Route::get('/produk-detail/{id}','ProdukController@show')->name('produk-detail');

Route::get('/count','AdminProdukController@countProduk')->name('count');

Route::get('/akun', function () {
    return view('akun.index');
})->name('akun.index');


Route::get('/daftar', function () {
    return view('akun.daftar');
})->name('daftar');


Auth::routes();

// Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
// Route::post('/logout', 'LoginController@logout')->name('logout');

Auth::routes();
// home admin
Route::get('/home', 'AdminHomeController@index')->name('home');
Route::get('/countproduk', 'AdminHomeController@CountProduk')->name('countProduk');

Route::get('produk-detail/{id}', 'ProdukController@show');

Route::post('peserta', 'PesertaController@getPeserta')->name('peserta');

Route::get('/navbar', 'OrderController@index');
Route::get('/history/invoice/{invoice}', 'OrderController@invoice')->middleware('auth')->name('pesanan.invoice');
Route::get('/pesanan/cek', 'OrderController@navindex')->name('pesanan.cek');
Route::post('checkout/{id}', 'ProdukController@addData')->name('checkout');

Auth::routes();

// Route::group(['middleware' => 'Auth'], function() {
    //penyelenggara admin
    Route::get('/penyelenggara/admin', 'AdminHomeController@index_p')->name('penyelenggaras');

    //penyelenggara penyelenggara
    Route::get('/penyelenggara_penyelenggara', 'AdminPenyelenggaraController@index_p')->name('daftarPenyelenggara_penyelenggara');
    Route::get('/penyelenggara_penyelenggara/create', 'AdminPenyelenggaraController@create_p')->name('createPenyelenggara_penyelenggara');
    Route::post('/penyelenggara_penyelenggara/create', 'AdminPenyelenggaraController@store_p')->name('storePenyelenggara_penyelenggara');
    Route::get('/penyelenggara_penyelenggara/{penyelenggara_penyelenggara}/edit', 'AdminPenyelenggaraController@edit_p')->name('editPenyelenggara_penyelenggara');
    Route::post('/penyelenggara_penyelenggara/{penyelenggara_penyelenggara}/edit', 'AdminPenyelenggaraController@update_p')->name('updatePenyelenggara_penyelenggara');
    Route::get('/penyelenggara_penyelenggara/{penyelenggara_penyelenggara}/delete', 'AdminPenyelenggaraController@destroy_p')->name('deletePenyelenggara_penyelenggara');
  
    //penyelenggara gambar
    Route::get('/penyelenggara_gambar', 'AdminGambarController@index_p')->name('daftarPenyelenggara_gambar');
    Route::get('/penyelenggara_gambar/create', 'AdminGambarController@create_p')->name('createPenyelenggara_gambar');
    Route::post('/penyelenggara_gambar/create', 'AdminGambarController@store_p')->name('storePenyelenggara_gambar');
    Route::get('/penyelenggara_gambar/{penyelenggara_gambar}/edit', 'AdminGambarController@edit_p')->name('editPenyelenggara_gambar');
    Route::post('/penyelenggara_gambar/{penyelenggara_gambar}/edit', 'AdminGambarController@update_p')->name('updatePenyelenggara_gambar');
    Route::get('/penyelenggara_gambar/{penyelenggara_gambar}/delete', 'AdminGambarController@destroy_p')->name('deletePenyelenggara_gambar');

    //penyelenggara produk
    Route::get('/penyelenggara_produk', 'AdminProdukController@index_p')->name('daftarPenyelenggara_produk');
    Route::get('/penyelenggara_produk/create', 'AdminProdukController@create_p')->name('createPenyelenggara_produk');
    Route::post('/penyelenggara_produk/create', 'AdminProdukController@store_p')->name('storePenyelenggara_produk');
    Route::get('/penyelenggara_produk/{penyelenggara_produk}/edit', 'AdminProdukController@edit_p')->name('editPenyelenggara_produk');
    Route::post('/penyelenggara_produk/{penyelenggara_produk}/edit', 'AdminProdukController@update_p')->name('updatePenyelenggara_produk');
    Route::get('/penyelenggara_produk/{penyelenggara_produk}/delete', 'AdminProdukController@destroy_p')->name('deletePenyelenggara_produk');
// });

    //produk-detail review
    // Route::get('/produk_detail', 'AdminUlasanController@index_pd')->name('daftarUlasan_pd');
    Route::post('/produk_detail', 'AdminUlasanController@store_pd')->name('storeUlasan_pd');
    Route::get('/produk_detail/{produk_detail}/delete', 'AdminUlasanController@destroy_pd')->name('deleteUlasan_pd');

    //akun (hubungi kami)
    Route::post('/hubungi_kami_akun/create', 'AdminHubungikamiController@store_akun')->name('storeHubungi_Kami_akun');

// Route::group(['middleware' => 'Auth'], function() {

    // detail_order
    Route::get('/detail_order', 'AdminDetailOrderController@index')->name('daftarDetail_Order');
    Route::get('/detail_order/create', 'AdminDetailOrderController@create')->name('createDetail_Order');
    Route::post('/detail_order/create', 'AdminDetailOrderController@store')->name('storeDetail_Order');
    Route::get('/detail_order/{detail_order}/edit', 'AdminDetailOrderController@edit')->name('editDetail_Order');
    Route::post('/detail_order/{detail_order}/edit', 'AdminDetailOrderController@update')->name('updateDetail_Order');
    Route::get('/detail_order/{detail_order}/delete', 'AdminDetailOrderController@destroy')->name('deleteDetail_Order');
    Route::post('/pembayaran/{id}', 'DetailOrderController@pembayaran')->name('pembayaran');

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

    // order
    Route::get('/order', 'AdminOrderController@index')->name('daftarOrder');
    Route::get('/order/create', 'AdminOrderController@create')->name('createOrder');
    Route::get('/order/checkout', 'AdminOrderController@store')->name('storeOrder');
    Route::get('/order/{order}/edit', 'AdminOrderController@edit')->name('editOrder');
    Route::post('/order/{order}/edit', 'AdminOrderController@update')->name('updateOrder');
    Route::get('/order/{order}/delete', 'AdminOrderController@destroy')->name('deleteOrder');
    Route::get('/pesanan/checkout', 'OrderController@store')->name('sOrder');

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
    
    // Pencarian
    Route::get('/read', 'ProdukController@read');
    Route::get('/ajax', 'ProdukController@ajax');

    //Tentang
    Route::get('/tentang','AdminHomeController@indextentang')->name('premium.index');
    Route::get('/premium', function () {
        return view('premium.index');
    })->name('tentang');

    Route::get('/about','AdminHomeController@indexabout')->name('about');
    Route::get('/about/create','AdminHomeController@createtoabout')->name('about.create');
    Route::post('/about/create','AdminHomeController@storeabout')->name('about.store');
    Route::get('/about/{about}/edit','AdminHomeController@edittentang')->name('about.edit');
    Route::post('/about/{about}/update','AdminHomeController@updateabout')->name('about.update');
    Route::get('/about/delete/{id}','AdminHomeController@destroyabout')->name('about.delete');

    // Route::get('/about', 'AdminHomeController@index_about')->name('daftarAbout');
    // Route::get('/about/create', 'AdminHomeController@create_about')->name('createAbout');
    // Route::post('/about/create', 'AdminHomeController@store_about')->name('storeAbout');
    // Route::get('/about/{about}/edit', 'AdminHomeController@edit_about')->name('editAbout');
    // Route::post('/about/{about}/edit', 'AdminHomeController@update_about')->name('updateAbout');
    // Route::get('/about/{about}/delete', 'AdminHomeController@destroy_about')->name('deleteAbout');

