@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <form action="saveEmployee" method="POST">
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input name="name" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>Role</label>
              <input name="role" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>City</label>
              <input name="city" type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input name="image" type="text" class="form-control" placeholder="Upload Image">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Linkdin Account</label>
              <input name="linkdin" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection