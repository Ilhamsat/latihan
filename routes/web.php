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
    return view('index');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('mahasiswa','MahasiswaController');
Route::resource('user','UserController');
Route::resource('file','FileController');

?>
