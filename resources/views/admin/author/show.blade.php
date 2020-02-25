@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('author.index')}}">Authors</a></li>
            <li class="breadcrumb-item active">Author Details</li>
        </ol>
    </div>

@endsection
@section('content')
    <div class="row">

        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Authors Profile</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset($author->photo) }}" alt="author image" width="100%">
                        </div>
                        <div class="col-md-6">

                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="2">{{ $author->name }}</th>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $author->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{ $author->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $author->address }}</td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>{{ $author->status }}</td>
                                </tr>

                                <tr>
                                    <td>Total Post</td>
                                    <td>{{ $author->total_post }}</td>
                                </tr>

                            </table>




                        </div>

                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection
