<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function store(Request $req){
        $data = [
            'name' => $req->input('name'), 
            'role' => $req->input('role'), 
            'imag' => $req->input('image'), 
            'city' => $req->input('city'), 
            'linkdin' => $req->input('linkdin'),

        ] ;
        Employee::create($data) ;
        return redirect('/') ;
    }

    public function index(){
        $employees = Employee::all() ;
        return view('welcome')->with('employees', $employees) ;
    }

    public function show($id){
        $employee = Employee::find($id) ;
        return view('show')->with('employee', $employee) ;
    }

    public function edit($id){
        $employee = Employee::find($id) ;
        return view('edit')->with('employee', $employee) ;
    }

    public function update(Request $req, $id){
        $data = [
            'name' => $req->input('name'), 
            'role' => $req->input('role'), 
            'imag' => $req->input('image'), 
            'city' => $req->input('city'), 
            'linkdin' => $req->input('linkdin'),
        ] ;
        Employee::where('id', $id)->update($data);
        return redirect('/') ;
    }

    public function destroy($id){
        $employee = Employee::find($id) ;
        $employee->delete() ;
        return redirect('/') ;
    }
 
}
