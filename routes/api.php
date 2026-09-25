<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::prefix('profildatadiri')->group(function () {
    Route::get('/', [ProfilController::class, 'index']);
    Route::get('/listdatadiri', [ProfilController::class, 'ListDataDiri']);
});
