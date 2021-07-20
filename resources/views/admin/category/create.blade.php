@extends('admin.layout.main')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm Danh Mục
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
                <form role="form" method="POST" action="{{route('admin.danh-muc.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Danh Mục Cha</label>
                            <select class="form-control" name="parent_id">
                                <option  value="">---Chọn---</option>
                                @foreach($categories as $cate)

                                    <option  value="{{$cate -> id}}">{{$cate -> name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên(<span style="color: red">*</span>)</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vị trí</label>
                            <input name="position" type="number" class="form-control" id="exampleInputEmail1" value="1">
                        </div>

                        <div class="form-group">
                            <label>Loại Danh Mục</label>
                            <select class="form-control" name="type">
                                <option value="1">Sản Phẩm</option>
                                <option value="2">Tin tức</option>
                                <option value="3">Khác</option>

                            </select>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="is_active" checked> Hiển Thị
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
