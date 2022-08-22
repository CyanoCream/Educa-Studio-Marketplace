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

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/detail_order', 'DetailOrderController@index')->name('daftarDetail_Order');

Route::get('/detail_order/create', 'DetailOrderController@create')->name('createDetail_Order');

Route::post('/detail_order/create', 'DetailOrderController@store')->name('storeDetail_Order');

Route::get('/detail_order/{detail_order}/edit', 'DetailOrderController@edit')->name('editDetail_Order');

Route::post('/detail_order/{detail_order}/edit', 'DetailOrderController@update')->name('updateDetail_Order');

Route::get('/detail_order/{detail_order}/delete', 'DetailOrderController@destroy')->name('deleteDetail_Order');