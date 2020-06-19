@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border bg-light">
                        <h4 class="box-title">Edit Book Form</h4>

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
                                <form method="post" action="{{route('books.update', $book->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-12">
                                            <div class="form-group">
                                                <h5>Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{$book->name}}" name="name" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('name'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('name')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Category <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select class="custom-select" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}" @if($book->category_id == $category->id) selected @endif >{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Status <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select class="custom-select"  name="status">

                                                        <option value="1" @if($book->status == 1)  selected @endif>Mới</option>
                                                        <option value="0" @if($book->status == 0) selected @endif>Cũ</option>

                                                    </select>
                                                </div>
                                                @if($errors->has('status'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('status')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{$book->desc}}" name="desc" class="form-control"
                                                           data-validation-required-message="This field is required">
                                                </div>
                                                @if($errors->has('desc'))
                                                    <div class="alert alert-danger">
                                                        {{$errors->first('desc')}}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <h5>Avatar</h5>
                                                <input type="file" name="avatar" value="{{$book->avatar}}" class="form-control">
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
                                        <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
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
