@extends('layouts.app')
@section('content')
 <div class="container border-3 text-center " >
        <a href="/add" class="btn btn-success mx-4" style="float:right;"> <small class="fw-bold ">+</small> Add Employee</a>
    </div>
<div class="container text-center text-dark">
    <h1>Sobrus Employees</h1>
<div class="container d-flex justify-content-around " style="flex-wrap:wrap"> 
    @foreach ($employees as $employee)
    <div class="card card-body bg-light center-block text-left rounded mx-3 bg-muted m-3 text-dark" style="min-width:26%;max-width:30%" >
        <div class="w-50 m-auto text-center mb-3">
            <img class="shad m-auto rounded-50" src="{{asset('images/'.$employee->imag).'.jfif'}}"  style="width:100px; border-radius:50px"/>
        </div>
        <a class="text-decoration-none border-bottom" href="{{$employee['linkdin']}}">
           <h4> <i class="fa-brands fa-linkedin"></i></h4> 
        </a>
        <h5 class="border-bottom p-1 fw-bold">{{$employee->name}}</h5>
        <small class="border-bottom fw-bold p-1"><i class="fa-sharp fa-solid fa-gem"></i> {{$employee['role']}}</small>
        <small class="border-bottom fw-bold p-1"><i class="fa-solid fa-location-dot text-danger"></i> {{$employee['city']}}</small>
        <div class="d-flex justify-content-around p-2 mt-2">
            <a class="w-25 text-decoration-none text-success fw-bold btn btn-muted" href="/employee/{{$employee->id}}"> <i class="fa-solid fa-eye"></i></a>
            <a class="w-25 text-decoration-none text-primary fw-bold btn btn-muted" href="/edit/{{$employee->id}}"> 
            <i class="fa-regular fa-pen-to-square"></i>
            </a>
            <a class="w-25 text-decoration-none text-danger fw-bold btn btn-muted" href="/delete/{{$employee->id}}">
                <i class="fa-regular fa-trash-can"></i>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection