@extends('admin.layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Bài Viết <a href="{{ route('admin.article.index') }}" class="btn btn-primary">Danh Sách</a>
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
            <form role="form" action="{{route('admin.article.update', ['id' => $article->id ])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-9 col-lg-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông tin sản phẩm</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề(<span style="color: red">*</span>)</label>
                                <input value="{{$article->title}}" type="text" class="form-control" id="name" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh </label>
                                <input type="file" class="" id="image" name="new_image">
                                @if ($article->image)
                                    <img src="{{asset($article->image)}}" width="200">
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Loại (<span style="color: red">*</span>)</label>
                                <select class="form-control w-50" name="type" >
                                    <option {{ ($article->type == 1 ? 'selected':'') }} value="1" >- Tin tức</option>
                                    <option {{ ($article->type == 2 ? 'selected':'') }} value="2">- Tin khuyến mại</option>
                                    <option {{ ($article->type == 3 ? 'selected':'') }} value="3">- Tin nổi bật</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input  value="{{ $article->position }}" type="number" class="form-control w-50" id="position" name="position" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url)</label>
                                <input  value="{{ $article->url }}" type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($article->is_active == 1 ? 'checked':'') }} type="checkbox" value="1" name="is_active"> <b>Hiển Thị</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt  (<span style="color: red">*</span>)</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="10" >{{ $article->summary }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Chi tiết  (<span style="color: red">*</span>)</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10">{{ $article->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Meta Title</label>
                        <textarea name="meta_title" class="form-control" rows="3" >{{ $article->meta_title }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="4" >{{ $article->meta_description }}</textarea>
                    </div>
                </div>

            </form>
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('my_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor1 = CKEDITOR.replace('summary');
            _ckeditor1.config.height = 200; // thiết lập chiều cao

            var _ckeditor2 = CKEDITOR.replace('description');
            _ckeditor2.config.height = 650; // thiết lập chiều cao

            CKEDITOR.replace( 'summary' );
        });

    </script>
@endsection

