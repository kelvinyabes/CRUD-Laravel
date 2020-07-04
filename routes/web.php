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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('adminlte.master');
// });

// Route::get('/', function(){
//     return view('home.index');
// });

// Route::get('/data-tables', function(){
//     return view('data-tables.index');
// });

Route::get('/pertanyaan/create', 'PertanyaanController@create'); // menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); // menyimpan data
Route::get('/pertanyaan', 'PertanyaanController@index'); // menampilkan semua
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show'); // menampilkan detail semua pertanyaan dengan isis
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit'); // menampilkan form untuk edit pertanyaan
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy'); // menghapus data dari id


Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@index');
