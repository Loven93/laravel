<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/datadiri', [ProfilController::class, 'index']);
Route::get('/listdatadiri', [ProfilController::class, 'listDataDiri']);
Route::get('/', function () {
    return view('welcome');
});
