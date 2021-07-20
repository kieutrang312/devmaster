@extends('admin.layout.main')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Danh Mục
            <a href="{{route('admin.danh-muc.index')}}" class="btn btn-primary">Danh sách</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{route('admin.danh-muc.update',['id'=> $category->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label>Danh Mục Cha</label>
                                <select class="form-control" name="parent_id">
                                    <option  value="">---Chọn---</option>
                                    @foreach($categories as $cate)

                                    <option {{$category->parent_id ==$cate->id ? 'selected':''}} value="{{$cate -> id}}">{{$cate -> name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input value="{{ $category->name }}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input   type="file" id="exampleInputFile" name="new_image">
                                <img width="100px" style="margin-top: 2px" src="{{asset($category->image)}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input value="{{ $category->position }}" name="position" type="number" class="form-control" id="exampleInputEmail1" value="1">
                            </div>

                            <div class="form-group">
                                <label>Loại Danh Mục</label>
                                <select class="form-control" name="type">
                                    <option {{$category->type ==1 ? 'selected' :''}} value="1">Sản Phẩm</option>
                                    <option  {{$category->type ==2 ? 'selected' :''}} value="2">Tin tức</option>
                                    <option {{$category->type ==0 ? 'selected' :''}} value="0">Khác</option>

                                </select>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{$category->is_active ==1 ? 'checked' :''}} > Hiển Thị
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
