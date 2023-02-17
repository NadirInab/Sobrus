@extends('layouts.app') 

@section('content')
<div class="container card card-body bg-light center-block text-center rounded m-auto w-50 bg-muted m-3 text-dark" >
    <div class="w-50 m-auto text-center mb-3">
        <img class="shad m-auto rounded-50" src="{{asset('images/'.$employee->imag)}}"  style="width:150px; border-radius:8px"/>
    </div>
    <a class="text-decoration-none fw-bold border-bottom" href="{{$employee['linkdin']}}"><h4> <i class="fa-brands fa-linkedin"></i></h4> </a>
    <h4 class="border-bottom fw-bold p-2"><i class="fa-solid fa-address-card"></i> {{$employee->name}}</h4>
    <small class="border-bottom fw-bold p-1"> <i class="fa-sharp fa-solid fa-gem"></i> {{$employee['role']}}</small>
    <strong class="border-bottom fw-bold p-1"><i class="fa-solid fa-location-dot text-danger"></i> {{$employee['city']}}</strong>
    <a class="btn btn-light border-2 text-secondary fw-bold w-25" href="/"> <i class="fa-solid fa-backward"></i> back</a>
</div>

@endsection