<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// sumber documentasi https://laravel.com/docs/10.x/routing#basic-routing

// router standadrd bawaan laavel
Route::get('/', function () {
    return view('welcome');
});

// router dengan parameter wajib isi
Route::get('/show/{id}',function(string $id){
    echo  "nilai parameter adalah ". $id;
});

// router dengan parameter tidak wajib isi / optional
Route::get('/showdua/{id?}',function(?string $id=null){
    echo  "nilai parameter adalah ". $id;
});

// router mengirim data array
Route::get('/home', function () {
    $profile=array(
        "noHp" => '081317777',
        "alamat" => "jakarta barat"
    );
    return view('home',[
        'name' => 'Samantha',
        'profilnya' => $profile
    ]);
});

Route::get('/siswa', function () {
    $mahasiswa=array(
        array(
            'no' => 1,
            'nama' => 'joko',
            'alamat' => 'ciputat',
        ),
        array(
            'no' => 2,
            'nama' => 'didin',
            'alamat' => 'jakarta',
        ),
        array(
            'no' => 3,
            'nama' => 'wahyu',
            'alamat' => 'bogor',
        ),
        array(
            'no' => 4,
            'nama' => 'yuni',
            'alamat' => 'cimahi',
        )
    );
    return view('siswaview',[
        'siswakey' => $mahasiswa
    ]);
});


// router dengan controller function index
// Route::get('/coba',[App\Http\Controllers\CobaController::class,"index"]);
Route::get('/coba',[CobaController::class,'index']);
Route::get('/login',[LoginController::class,'index']);













