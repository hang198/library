@extends('layouts.app')
@section('content')
    <section class="content-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('books.index') }}">Books</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Books</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{route('books.create')}}">Create</a>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Avatar</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($books as $key=>$book)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->category->name}}</td>
                                        <td><img src="{{ asset('storage/'. $book->avatar)}}" height="80px" width="80px"></td>
                                        <td>@if($book->status == 1)
                                            Mới
                                            @else
                                            Cũ
                                            @endif
                                        </td>
                                        <td>{{$book->desc}}</td>
                                        <td><a href="{{ route('books.edit',$book->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('books.destroy',$book->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No data</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
