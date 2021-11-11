<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\companyController;

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

Route::get('/company/list', [companyController::class, 'create']);
Route::get('/company/list', [companyController::class, 'show']);
Route::get('/company/update/{id}', [companyController::class, 'show_company']);
Route::post('/company/update', [companyController::class, 'update']);
Route::get('/company/delete/{id}', [companyController::class, 'delete']);
Route::get('/company/form', [companyController::class, 'index']);
Route::post('/company/form', [companyController::class, 'store']);

Route::get('/employee/list', [employeeController::class, 'create']);
Route::get('/employee/list', [employeeController::class, 'show']);
Route::get('/employee/update/{id}', [employeeController::class, 'show_employee']);
Route::post('/employee/update', [employeeController::class, 'update']);
Route::get('/employee/delete/{id}', [employeeController::class, 'delete']);
Route::get('/employee/form', [employeeController::class, 'index']);
Route::post('/employee/form', [employeeController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
