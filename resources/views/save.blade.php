@extends('layouts.app')

@section('content')
    <div class="form container w-50 fw-bold">
      
        <h1 class="text-center text-secondary"> <i class="fa-solid fa-user-plus"></i> </h1>
        <form action="saveEmployee" method="POST">
            @csrf
            <div class="form-group p-1">
              <label>Name</label>
              <input name="name" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group p-1">
              <label>Role</label>
              <input name="role" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group p-1">
              <label>City</label>
              <input name="city" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group p-1">
              <label>Image</label>
              <input name="image" type="text" class="form-control" placeholder="Upload Image">
            </div>
            <div class="form-group p-1">
              <label for="exampleInputPassword1">Linkdin Account</label>
              <input name="linkdin" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success p-2 m-auto d-block mt-2 w-25"><small class="fw-bold "> + </small>Add</button>
          </form>
    </div>
@endsection