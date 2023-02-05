@extends('layouts.app')

@section('content')
    <div class="form container w-50 fw-bold">
        <h2 class="text-center">Add Employee </h2>
        <form action="update/{{$employee->id}}" method="POST">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input name="name" type="text" class="form-control" placeholder="Enter email" value="{{$employee->name}}">
            </div>
            <div class="form-group">
              <label>Role</label>
              <input name="role" type="text" class="form-control" placeholder="Enter email" value="{{$employee->role}}">
            </div>
            <div class="form-group">
              <label>City</label>
              <input name="city" type="text" class="form-control" placeholder="Enter email" value="{{$employee->city}}">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input name="image" type="text" class="form-control" placeholder="Upload Image" value="{{$employee->imag}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Linkdin Account</label>
              <input name="linkdin" type="text" class="form-control" id="exampleInputPassword1" value="{{$employee->linkdin}}">
            </div>
            <button type="submit" class="btn btn-secondary m-auto d-block p-2 mt-2 w-25">UpDate</button>
          </form>
    </div>
@endsection