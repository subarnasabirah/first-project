@extends('layouts.admin.master')
@section('content')

 <div class="row">
          <!-- left column -->
          <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('user.store')}}" method="post">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Enter user Name">
                    @error('name')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                  </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter email">
                    @error('email')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

                  </div>

                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="phone" placeholder="Enter phone number">
                    @error('phone')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    @error('password')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

                  </div>

                  <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="password_confirmation"  class="form-control" id="confirm_password" placeholder="Confirm Password">
         

                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
            </div>
         
          </div>

@endsection