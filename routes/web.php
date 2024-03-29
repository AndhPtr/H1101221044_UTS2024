<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('pegawai', [PegawaiController::class , 'index']);
Route::get('jabatan', [JabatanController::class , 'index']);
Route::get('pendidikan', [PendidikanController::class , 'index']);
Route::get('datapegawai', [DataPegawaiController::class , 'index']);
Route::get('/', [HomeController::class , 'index']);