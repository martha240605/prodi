<?php
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biodatacontroller;
use App\Http\Controllers\Bukucontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::resource ('/buku', BukuController::class);
Route::get('biodata',[Biodatacontroller::class,'index']);
Route::post('biodata',[Biodatacontroller::class,'proses']);
Route::get('mahasiswa', [BiodataController::class, 'mahasiswa']);
Route::get('matakuliah/create/{x}/{y}', function ($nama,$sks){
    Matakuliah::create([
        'nama' => $nama,
        'sks' => $sks
    ]);
    return "Berhasil Tambah Data!";
});
Route:: get('matakuliah/lihat', function (){
    $matakuliah = Matakuliah::all();
    foreach ($matakuliah as $data ){
        echo $data->nama . " " . $data->sks . "<br>";
    }
});
Route::get('prodi/create/{x}', function ($nama){
    Prodi::create([
        'nama' => $nama
    ]);
    return "Berhasil Tambah Data : $nama";
});
Route:: get('prodi/lihat', function (){
    $prodi = Prodi::all();
    foreach ($prodi as $data ){
        echo $data->nama . "<br>";
    }
});
