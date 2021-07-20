@extends('admin.layout.main')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm Người Dùng
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
        <div class="col-md-12">
        @if ($errors->any()) <!-- kiểm tra có bất kỳ lỗi nào -->
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Lỗi !</h4>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </div>
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin danh mục</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên(<span style="color: red">*</span>)</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh</label>
                            <input type="file" id="exampleInputFile" name="avatar">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email(<span style="color: red">*</span>)</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu(<span style="color: red">*</span>)</label>
                            <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Nhập mật khẩu">
                        </div>


                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="is_active" checked> Kích Hoạt
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
