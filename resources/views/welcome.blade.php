@extends('layouts.app')
@section('content')
 <div class="container border-3 text-center">
        <a href="/add" class="btn btn-success"> <small class="fw-bold ">+</small> Add Employee</a>
    </div>
<div class="container text-center text-dark">
    <h1 >Sobrus Employees</h1>
<div class="container d-flex justify-content-around " style="flex-wrap:wrap"> 
    @foreach ($employees as $employee)
    <div class="card card-body bg-light center-block text-left rounded mx-3 bg-muted m-3 text-dark" style="min-width:26%;max-width:30%" >
        <div class="w-50 m-auto text-center mb-3">
            <img class="shad m-auto rounded-50" src="{{asset('images/'.$employee->imag).'.jfif'}}"  style="width:100px; border-radius:20px"/>
        </div>
        <a href="{{$employee['linkdin']}}">linkd in</a>
        <h4>{{$employee->name}}</h4>
        <small>{{$employee['role']}}</small>
        <strong>{{$employee['city']}}</strong>
        <a class="w-25 text-decoration-none text-success border-2 btn btn-muted" href="/employee/{{$employee->id}}">Show</a>
    </div>
    @endforeach
</div>
@endsection