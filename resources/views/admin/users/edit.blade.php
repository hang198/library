@extends('layouts.app')
@section('content')

    <section class="content-header">
        <h1>
            Update user
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="mdi mdi-home-outline"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
            <li class="breadcrumb-item active">User update</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Update user</h4>

                        <ul class="box-controls pull-right">
                            <li><a class="box-btn-close" href="#"></a></li>
                            <li><a class="box-btn-slide" href="#"></a></li>
                            <li><a class="box-btn-fullscreen" href="#"></a></li>
                        </ul>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form  method="post" action="{{route('users.update',$user->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text"  value="{{$user->name}}" name="name" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Phone number <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text"  value="{{$user->phone}}" name="phone" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('phone'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('phone')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Email Field <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email"  value="{{$user->email}}" name="email" class="form-control" disabled> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Address <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="address"  value="{{$user->address}}" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('address'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('address')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Role <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="role" class="form-control">
                                                        <option value="1"
                                                        @if($user->role == \App\Http\Controllers\RoleConstant::ADMIN)
                                                        selected
                                                        @endif
                                                        >Admin</option>
                                                        <option value="2"
                                                            @if($user->role == \App\Http\Controllers\RoleConstant::MANAGEMENT)
                                                                selected
                                                            @endif

                                                        >Management</option>
                                                        <option value="3"
                                                            @if($user->role == \App\Http\Controllers\RoleConstant::USER)
                                                                selected
                                                            @endif

                                                        >User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right bt-1 pt-10">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a  href="{{route('users.index')}}" class="btn btn-danger">Back</a>
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection

