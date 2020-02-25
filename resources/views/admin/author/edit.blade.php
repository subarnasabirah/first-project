@extends('layouts.admin.master')
@section('breadcrumb')
<!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{route('author.index')}}">Authors</a></li>
              <li class="breadcrumb-item active">Author List</li>
            </ol>
          </div>

@endsection



@section('content')
<div class="row">
          <!-- left column -->
          <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('author.update', $author->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                  @include('admin.author._form')


                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->

            </div>
            <!-- /.card -->

          </div>


@endsection
