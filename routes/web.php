<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('company')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('company.list');
    Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/update/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/show/{id}', [CompanyController::class, 'show'])->name('company.show');
    Route::delete('/delete/{id}', [CompanyController::class, 'destroy'])->name('company.delete');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.list');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');
    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
});