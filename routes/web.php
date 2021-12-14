<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tgs4', function () {
    return view('tugas4');
});

Route::get('prak2', function () {
    return view('praktikum2');
});

Route::get('ets',"ViewController@showVaccineForm") ;

Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");


Route::get('kamusGRE',"ViewController@showKamusGRE") ;
Route::post('definisiGRE',"ViewController@resultDefinisi");

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/detail/{id}','PegawaiController@detail');

//route cari pegawai
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD Tugas

//Lihat Index (Data Tabel Tugas Mahasiswa)
Route::get('/tugas','TugasController@index');

//Tambah
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/input','TugasController@input');

//Update
Route::get('/tugas/update/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');

//Hapus
Route::get('/tugas/hapus/{id}','TugasController@hapus');


//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD Pegawai
Route::get('/sepatu','SepatuController@index');

Route::get('/sepatu/tambah','SepatuController@tambah');
Route::post('/sepatu/store','SepatuController@store');

Route::get('/sepatu/edit/{id}','SepatuController@edit');
Route::post('/sepatu/update','SepatuController@update');

Route::get('/sepatu/hapus/{id}','SepatuController@hapus');

Route::get('/sepatu/detail/{id}','SepatuController@detail');

//route cari pegawai
Route::get('/sepatu/cari','SepatuController@cari');
