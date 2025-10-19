<?php

use App\Http\Controllers\K3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [K3Controller::class, 'index'])->name('home');
Route::get('/tentang', [K3Controller::class, 'tentang'])->name('tentang');
Route::get('/program-k3/pendahuluan', [K3Controller::class, 'pendahuluan'])->name('pendahuluan');
Route::get('/program-k3/landasan-hukum', [K3Controller::class, 'landasanHukum'])->name('landasan-hukum');
Route::get('/program-k3/apd', [K3Controller::class, 'apd'])->name('apd');
Route::get('/program-k3/denah', [K3Controller::class, 'denah'])->name('denah');
Route::get('/program-k3/p3k', [K3Controller::class, 'p3k'])->name('p3k');
Route::get('/faktor-keselamatan', [K3Controller::class, 'faktorKeselamatan'])->name('faktor-keselamatan');