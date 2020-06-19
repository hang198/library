@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Create Customer Form</h4>

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
                                <form method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>CodeID <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="codeID" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('codeID'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('codeID')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Class <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="class" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('class'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('class')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Date of bird <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="dob" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('dob'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('dob')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right bt-1 pt-10">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <a href="{{route('customers.index')}}" class="btn btn-danger">Back</a>
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
