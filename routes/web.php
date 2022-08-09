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
    return view('layout.master');
});

Route::get('index', function () {
    return view('premium.index');
});

Route::get('katalog', function () {
    return view('katalog.index');
})->name('katalog.index');
Route::prefix('katalog')->group(function () {
    Route::get('aktivitas', function () {
        return view('katalog.aktivitas');
    })->name('katalog.aktivitas');
    Route::get('kursus', function () {
        return view('katalog.kursus');
    })->name('katalog.kursus');
    Route::get('experience', function () {
        return view('katalog.experience');
    })->name('katalog.experience');
    Route::get('activity_kit', function () {
        return view('katalog.activity_kit');
    })->name('katalog.activity_kit');
    Route::get('gratis', function () {
        return view('katalog.gratis');
    })->name('katalog.gratis');
});

Route::get('pesanan', function () {
    return view('pesanan.index');
})->name('pesanan.index');
Route::prefix('pesanan')->group(function () {
    Route::get('keranjang', function () {
        return view('pesanan.keranjang');
    })->name('pesanan.keranjang');  
    Route::get('tiket', function () {
        return view('pesanan.tiket');
    })->name('pesanan.tiket');    
    Route::get('riwayat_pemesanan', function () {
        return view('pesanan.riwayat_pemesanan');
    })->name('pesanan.riwayat_pemesanan');    
});

// Route::prefix('kontak')->group(function () {
//     Route::get('orders', function () {
//         return view('kontak.orders');
//     })->name('kontak.orders');  
//     Route::get('addresses', function () {
//         return view('kontak.addresses');
//     })->name('kontak.addresses');    
//     Route::get('account_details', function () {
//         return view('kontak.account_details');
//     })->name('kontak.account_details'); 
//     Route::get('logout', function () {
//         return view('kontak.logout');
//     })->name('kontak.logout');    
// });



// Route::get('/', function () {
//     return redirect(route('login'));
// });
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard')