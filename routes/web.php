<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return redirect()->route('karyawans.index');
});

Route::resource('karyawans', KaryawanController::class);


?>