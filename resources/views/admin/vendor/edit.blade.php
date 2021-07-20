
@extends('admin.layout.main')
<!-- Content Wrapper. Contains page content -->
@section('body')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sửa Nhà Cung Cấp
            <a href="{{route('admin.nha-cung-cap.index')}}" class="btn btn-primary">Danh Sách</a>
        </h1>
    </section>
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
                        <h3 class="box-title">Thông tin nhà cung cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{route('admin.nha-cung-cap.update', ['id' => $vendor->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Nhà Cung Cấp(<span style="color: red">*</span>)</label>
                                <input  value="{{ $vendor->name }}"  type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email(<span style="color: red">*</span>)</label>
                                <input value="{{ $vendor->email }}"  type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SDT(<span style="color: red">*</span>)</label>
                                <input  value="{{ $vendor->phone }}" type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Nhập SDT">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" name="new_image" id="exampleInputFile">
                                <img src="{{asset($vendor->image)}}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website</label>
                                <input value="{{ $vendor->website }}" type="text" name="website" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <textarea  type="text" name="address" class="form-control" id="exampleInputEmail1" >{{ $vendor->address}} </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input  value="{{ $vendor->position }}" type="number" name="position" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="is_active" type="checkbox" {{$vendor->is_active ==1 ? 'checked' :''}}> Trạng thái hiện thị
                                </label>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </section>


@endsection


<!-- jQuery 3 -->



