@extends('layouts.app')
@section('content')
<div>
 <div class="container border-3 text-center " >
        <a href="/add" class="btn btn-success mx-4" style="float:right;"> <small class="fw-bold ">+</small> Add Employee</a>
    </div>
<div class="container text-dark">
    <div class="container text-center">
        <h2 class="text-secondary mx-4 border-bottom"><span class="text-info fw-bold">Sobrus </span>Employees  </h2>
        <div class="input-group mx-4">
            <form action="/home/employees/search" method="GET" class="form-outline d-flex w-50 m-auto p-3">
                <input name="query" type="search" id="form1" class="form-control"  placeholder="Search for employee"/>
                <button type="submit" class="btn btn-primary mx-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
<div class="container d-flex justify-content-around text-center" style="flex-wrap:wrap"> 
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
            <a class="w-25 text-decoration-none text-success fw-bold btn btn-muted" href="/employees/{{$employee->id}}"> <i class="fa-solid fa-eye"></i></a>
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
    <span class="container d-flex align-items-center justify-content-center">{{$employees->links('pagination::bootstrap-4')}}</span>
</div>
@endsection