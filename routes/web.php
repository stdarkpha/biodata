<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return redirect()->route('biodatas.index');
});

Route::resource('biodatas', BiodataController::class);
