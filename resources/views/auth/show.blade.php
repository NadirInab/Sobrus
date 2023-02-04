@extends('layouts.app') 

@section('content')
<div class=" container card card-body bg-light center-block text-center rounded mx-3 bg-muted m-3 text-dark" style="min-width:26%;max-width:30%" >
    <div class="w-50 m-auto text-center">
        <img class="m-auto rounded-50" src="{{asset('images/employee.png')}}"  style="width:100px"/>
    </div>
    <a href="{{$employee['linkdin']}}">linkd in</a>
    <h4>{{$employee->name}}</h4>
    <small>{{$employee['role']}}</small>
    <strong>{{$employee['city']}}</strong>
    <a href="/employee/{{$employee->id}}">Show</a>
</div>
@endsection