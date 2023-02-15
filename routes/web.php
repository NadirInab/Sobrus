<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth ;

Route::get('/', function(){
    return redirect('/home/employees') ;
});

Route::get('/home/employees', [EmployeesController::class, 'index']);

Route::post('saveEmployee',[EmployeesController::class, 'store'] ) ;

Route::get('employees/{id}',[EmployeesController::class, 'show'] ) ;

Route::get('edit/{id}',[EmployeesController::class, 'edit'] ) ;

Route::post('edit/update/{id}',[EmployeesController::class, 'update'] ) ;

Route::get('delete/{id}',[EmployeesController::class, 'destroy'] ) ;

Route::get('/home/employees/search', [EmployeesController::class, 'search']) ;

Route::get('/About', function(){
    return view('about') ;
}) ;

Route::get('/add', function(){
    return view('save') ;
}) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
