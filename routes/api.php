<?php

use Illuminate\Http\Request;

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
Route::get('/', function() {
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