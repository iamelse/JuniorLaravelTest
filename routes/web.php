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

Route::get('/company', [CompanyController::class, 'index'])->name('company.list');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::get('/company/show/{id}', [CompanyController::class, 'show'])->name('company.show');
Route::delete('/company/delete/{id}', [CompanyController::class, 'destroy'])->name('company.delete');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.list');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/show/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::get('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');