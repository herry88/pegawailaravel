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

Route::get('/', function () {
    return view('welcome');
});

//rute
Route::get('/hello', function(){
    return '<h1>Belajar Laravel </h1>';
});

//rute prefix
Route::group(['middleware'=>['auth']],function(){
    //rute Jabatan
    Route::get('jabatan',[App\Http\Controllers\JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('jabatan-create',[App\Http\Controllers\JabatanController::class,'create'])->name('jabatan.create');
    Route::post('jabatan-store',[App\Http\Controllers\JabatanController::class,'store'])->name('jabatan.store');
    Route::get('jabatan/edit/{id}',[App\Http\Controllers\JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::post('jabatan/update/{id}', [App\Http\Controllers\JabatanController::class, 'update'])->name('jabatan.update');
    //deelte
    Route::get('jabatan-destroy/destroy/{id}', [App\Http\Controllers\JabatanController::class, 'destroy'])->name('jabatan.destroy');

});



//route pegawai
Route::resource('pegawai',App\Http\Controllers\PegawaiController::class)->middleware('auth');
Route::get('pegawai/destroy/{id}',App\Http\Controllers\PegawaiController::class,'destroy')->name('pegawai.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
