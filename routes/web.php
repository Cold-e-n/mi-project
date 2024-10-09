<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosisiWarnaController;
use App\Http\Controllers\TableWarnaController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman 'Table Warna'
Route::group([
    'prefix' => 'table-warna',
    'as' => 'table-warna.'
], function() {
    Route::controller(TableWarnaController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/{tableWarna}', 'show')->name('detail');
    });
});

// Halaman 'Posisi Warna'
Route::group([
    'prefix' => 'posisi-warna',
    'as' => 'posisi-warna.'
], function() {
    Route::controller(PosisiWarnaController::class)->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'create')->name('add');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{posisiWarna}', 'edit')->name('edit');
        Route::put('/update/{posisiWarna}', 'update')->name('update');
        Route::get('/{posisiWarna}', 'show')->name('detail');
        Route::delete('/delete/{posisiWarna}', 'destroy')->name('delete');
    });
});

Route::get('/welcome', function() {
    return view('welcome');
});
