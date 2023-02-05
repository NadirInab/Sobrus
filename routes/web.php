<?php

use App\Http\Controllers\EmployeesController;
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

Route::get('/', [EmployeesController::class, 'index']);

Route::get('/About', function(){
    return view('about') ;
}) ;

Route::get('/add', function(){
    return view('save') ;
}) ;

Route::get('employee/{id}',[EmployeesController::class, 'show'] ) ;

// Route::get('/employee/{id}',[EmployeesController::class, 'destroy'] ) ;

Route::post('saveEmployee', [EmployeesController::class, 'store']) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
