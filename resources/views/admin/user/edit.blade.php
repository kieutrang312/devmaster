@extends('admin.layout.main')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Thông Tin Người Dùng
            <a href="{{route('admin.user.index')}}" class="btn btn-primary">Danh sách</a>
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
                    <form role="form" method="POST" action="{{route('admin.user.update',['id'=> $user->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên</label>
                                <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input   type="file" id="exampleInputFile" name="avatar">
                                <img width="100px" style="margin-top: 2px" src="{{asset($user->avatar)}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="color: red">Mật khẩu mới</label>
                                <input  name="password" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">
                            </div>



                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="is_active" {{$user->is_active ==1 ? 'checked' :''}} > Kích hoạt
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

