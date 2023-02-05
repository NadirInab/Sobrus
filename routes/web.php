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


Route::get('/', function(){
    return redirect('/employees') ;
});

Route::get('/employees', [EmployeesController::class, 'index']);

Route::get('employee/{id}',[EmployeesController::class, 'show'] ) ;

Route::post('saveEmployee',[EmployeesController::class, 'store'] ) ;

Route::get('delete/{id}',[EmployeesController::class, 'destroy'] ) ;

Route::get('edit/{id}',[EmployeesController::class, 'edit'] ) ;

Route::post('edit/update',[EmployeesController::class, 'update'] ) ;

Route::get('/About', function(){
    return view('about') ;
}) ;

Route::get('/add', function(){
    return view('save') ;
}) ;

Route::post('delete/{id}', [EmployeesController::class, 'store']) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
