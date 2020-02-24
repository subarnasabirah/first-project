@extends('layouts.admin.master')
@section('breadcrumb')

    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Author List</li>
        </ol>
    </div>

@endsection
@section('content')

    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Authors</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)

                        <tr>
                            <td>{{$serial++}}</td>
                            <td>{{$author->name}}</td>
                            <td>{{$author->email}}</td>
                            <td>{{$author->status}}</td>
                            <td>
                                <a href="{{route('author.edit',$author->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{route('author.destroy',$author->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You confirm?')">Delete</button>
                                </form>
                            </td>

                        </tr>




                    @endforeach
                    </tbody>
                </table>
                {{$authors->render() }}




            </div>
            <!-- /.card-body -->
        </div>


@endsection
