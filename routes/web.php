<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/', 'App\Http\Controllers\otentikasi\OtentikasiController@login')->name('login');
Route::get('/', 'App\Http\Controllers\otentikasi\OtentikasiController@index')->name('login');

// Route::group(['middleware' => 'CekLoginMiddleware'], function (){
Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', function () {
        return view('index');
        // if(session('berhasil_login')){
        //     return view('index');
        // } else{
        //     return redirect('/');
        // }
    });
    
    Route::get('/tabel', function () {
        return view('tabel');
        // if(session('berhasil_login')){
        //     return view('tabel');
        // } else{
        //     return redirect('/');
        // }
    });

    Route::get('logout', 'App\Http\Controllers\otentikasi\OtentikasiController@logout')->name('logout');
});