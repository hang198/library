@extends('layouts.app')
@section('content')
    <section class="content-header">
        <h1>
            <a href="" class="text-success">Đang hoạt động ({{count($customers)}})</a>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('customers.index') }}">Customers</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">List Customers</h4>
                        <div class="box-controls pull-right">
                            <button id="row-count" class="btn btn-xs btn-primary">Row count</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <a class="btn btn-primary" href="{{ route('customers.create') }}">Create</a>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>CodeID</th>
                                    <th>Class</th>
                                    <th>Date of birds</th>
                                    <th>Handles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($customers as $key=>$customer)

                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->codeID}}</td>
                                        <td>{{$customer->class}}</td>
                                        <td>{{$customer->dob}}</td>
                                        <td><a href="{{ route('customers.edit',$customer->id) }}"
                                               class="btn btn-success">Edit</a>
                                            <a
                                                href="{{ route('customers.destroy',$customer->id) }}"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                                class="btn btn-danger">Delete</a>
                                        </td>
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

