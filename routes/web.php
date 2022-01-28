<?php

use App\Http\Controllers\EmployeeController;
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
Route::post('/', [EmployeeController::class, 'store']);
Route::get('/karyawan', [EmployeeController::class, 'index']);
Route::get('/karyawan/{id}', [EmployeeController::class, 'detail']);
Route::get('/karyawan/export-word/{id}', [EmployeeController::class, 'exportWord']);
