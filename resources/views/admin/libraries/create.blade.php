@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Create Library Form</h4>

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
                                <form  method="post" action="{{route('libraries.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Address <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="address" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('address'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('address')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Phone number <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="phone" class="form-control" data-validation-required-message="This field is required"> </div>
                                                @if($errors->has('phone'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('phone')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Image</h5>
                                                <input type="file" name="avatar" class="form-control" >
                                                @if($errors->has('avatar'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('avatar')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right bt-1 pt-10">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a  href="{{route('libraries.index')}}" class="btn btn-danger">Back</a>
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
