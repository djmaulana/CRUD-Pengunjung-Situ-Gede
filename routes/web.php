<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/inventory', [PengunjungController::class, 'index']);
Route::get('/add', [DashboardController::class, 'add']);


Route::post('/Gudang/store', [PengunjungController::class, 'store']);
Route::post('/Gudang/update', [PengunjungController::class, 'update']);
Route::get('/Gudang/edit/{id}',[PengunjungController::class, 'edit']);
Route::get('/Gudang/hapus/{id}', [PengunjungController::class, 'hapus']);
Route::get('/Gudang/cari/',[PengunjungController::class, 'cari']);
Route::get('/addData',[DashboardController::class, 'addData']);

Route::get('/transaction',[DashboardController::class, 'transaction']);
Route::post('/transaction/store',[DashboardController::class, 'store']);
Route::get('/Addtransaction',[DashboardController::class, 'Addtransaction']);
Route::get('/transaction/edit/{id}',[DashboardController::class, 'editTransaction']);
Route::get('/transaction/hapus/{id}',[DashboardController::class, 'hapus']);
Route::get('/transaction/search',[DashboardController::class, 'search']);
Route::post('/transaction/update',[DashboardController::class, 'updateTransaction']);














