<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('biodata',[Biodatacontroller::class,'index']);
Route::post('biodata',[Biodatacontroller::class,'proses']);
Route::get('mahasiswa', [BiodataController::class, 'mahasiswa']);