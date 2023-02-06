<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return redirect('/employees') ;
});

Route::get('/employees', [EmployeesController::class, 'index']);

Route::get('employees/{id}',[EmployeesController::class, 'show'] ) ;

Route::post('saveEmployee',[EmployeesController::class, 'store'] ) ;

Route::get('delete/{id}',[EmployeesController::class, 'destroy'] ) ;

Route::get('edit/{id}',[EmployeesController::class, 'edit'] ) ;

Route::post('edit/update/{id}',[EmployeesController::class, 'update'] ) ;

Route::get('/About', function(){
    return view('about') ;
}) ;

Route::get('/add', function(){
    return view('save') ;
}) ;

// Route::post('delete/{id}', [EmployeesController::class, 'store']) ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
