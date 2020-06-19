@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('libraries.index') }}" class="text-success">Đang hoạt động ( {{count($libraries)}})</a>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Libraries</a></li>
            <li class="breadcrumb-item active">Libraries table</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Libraries</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{ route('libraries.create') }}">Create</a>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Avatar</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($libraries as $key=>$library)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$library->name}}</td>
                                        <td>{{$library->phone}}</td>
                                        <td>{{$library->address}}</td>
                                        <td><img src="{{ asset('storage/'. $library->avatar)}}" height="80px" width="80px"></td>
                                        <td><a href="{{route('libraries.edit',$library->id)}}" class="btn btn-success">Edit</a></td>
                                        <td><a href="{{ route('libraries.destroy',$library->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No data</td>
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

