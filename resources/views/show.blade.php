@extends('layouts.app') 

@section('content')
<div class="container card card-body bg-light center-block text-center rounded m-auto w-50 bg-muted m-3 text-dark" >
    <div class="w-50 m-auto text-center mb-3">
        <img class="shad m-auto rounded-50" src="{{asset('images/'.$employee->imag.'.jfif')}}"  style="width:150px; border-radius:8px"/>
    </div>
    <a class="text-decoration-none fw-bold" href="{{$employee['linkdin']}}">linkd in</a>
    <h4>{{$employee->name}}</h4>
    <small>{{$employee['role']}}</small>
    <strong>{{$employee['city']}}</strong>
    {{-- <a href="/employee/{{$employee->id}}">Show</a> --}}
    <a class="btn btn-light border-2 text-secondary fw-bold w-25" href="/">back</a>
</div>

@endsection