@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            <a href="" class="text-success">Đang hoạt động ({{count($users)}})</a>|
            <a href="{{ route('users.trash') }}">Đã xóa</a>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Users</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{route('users.create')}}">Create</a>
                            <div class="card-body">
                                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" class="form-control">
                                    <br>
                                    <button class="btn btn-success">Import User Data</button>
                                    <a class="btn btn-warning" href="{{ route('users.export') }}">Export User Data</a>
                                </form>
                            </div>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $key=>$user)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>@if($user->role == 1 ) Admin @elseif($user->role == 2) Management @else
                                                User @endif </td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->address}}</td>

                                        <td>
                                            @if($user->id == 1 || $user->id == \Illuminate\Support\Facades\Auth::id() )
                                            @else

                                                <a href="{{route('users.edit',$user->id)}}"
                                                   class="btn btn-success">Edit</a>
                                                <a href="{{route('users.destroy',$user->id)}}"
                                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                                   class="btn btn-danger">Delete</a>
                                            @endif
                                        </td>
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
