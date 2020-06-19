@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{ route('users.index') }}" >Đang hoạt động</a>|
            <a href="{{ route('users.trash') }}"  class="text-success">Đã xóa({{count($usersOfTrash)}})</a>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active">Users of Trash Table</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Users of Trash</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($usersOfTrash as $key=>$user)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->address}}</td>
                                        <td><a href="{{route('users.restore',$user->id)}}" class="btn btn-success">Restore</a></td>
                                        <td><a href="{{route('users.forceDelete',$user->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')"  class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No data</td>
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
