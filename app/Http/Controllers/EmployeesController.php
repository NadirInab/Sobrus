<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function store(Request $req){
        $req->validate([
            "name"=> "required", 
            "role"=> "required", 
            "city"=> "required", 
            "image"=> "required", 
            "linkdin"=> "required"
        ]) ;
        $data = [
            'name' => $req->input('name'), 
            'role' => $req->input('role'), 
            'imag' => $req->file('image')->getClientOriginalName(), 
            'city' => $req->input('city'), 
            'linkdin' => $req->input('linkdin'),
            
        ] ;
        $req->image->move(public_path('images'), $data['imag']);
        Employee::create($data) ;
        return redirect('/') ;
    }

    public function index(){
        $employees = Employee::paginate(9) ;
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
        $req->validate([
            'name' => 'required',
            'role' => 'required',
            'city' => 'required',
            "image"=> "required", 
            'linkdin'=> 'required'
        ]) ;
        $data = [
            'name' => $req->input('name'), 
            'role' => $req->input('role'), 
            'imag' => $req->file('image')->getClientOriginalName(), 
            'city' => $req->input('city'), 
            'linkdin' => $req->input('linkdin'),
        ] ;
        $req->image->move(public_path('images'), $data['imag']);
        Employee::where('id', $id)->update($data);
        return redirect('/') ;
    }

    public function destroy($id){
        $employee = Employee::find($id) ;
        $employee->delete() ;
        return redirect('/') ;
    }

    public function search(){
        $search = $_GET['query'] ;
        $employee = Employee::where('name', 'LIKE', '%'.$search.'%')->get() ;
        return view('search')->with('employees', $employee) ;
    }
}