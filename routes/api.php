<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\BarangController;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    $barangs = Barang::all();
    return view('index', compact('barangs'));


});

Route::get('/dashboard', function () {
    $barangs = Barang::all();
    return respone()->json([
        'message' => 'berhasil mengambil data',
        'data' => $barangs
    ]);
});


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/apibarang',[BarangController::class, 'create' ])->name('create');
    Route::post('/simpan', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/apibarang/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('/apibarang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');




