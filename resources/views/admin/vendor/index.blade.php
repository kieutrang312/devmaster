
@extends('admin.layout.main')
<!-- Content Wrapper. Contains page content -->
@section('body')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                QL Nhà Cung Cấp
                <a href="{{route('admin.nha-cung-cap.create')}}" class="btn btn-primary">Thêm</a>
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">

                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>

                                    <th  width="180px">Tên NCC</th>
                                    <th width="180px">Email</th>
                                    <th>Điện Thoại</th>
                                    <th width="100px">Avart</th>
                                    <th width="150px">Website</th>
                                    <th>Vị trí</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động </th>
                                </tr>
                                @foreach($data as $index=>$item)
                                    <tr>

                                        <td>{{$item->name}}</td>
                                        <td>
                                            {{$item->email}}
                                        </td>
                                        <td>{{$item->phone}}</td>
                                        <td><img width="100" src="{{asset($item->image)}}" alt="">
                                            </td>
                                        <td>{{$item->website}}</td>
                                        <td>{{$item->position}}</td>
                                        <td>{!! ($item->is_active == 1) ? '<span class="badge bg-green"> hiển thị </span>' : '<span class="badge bg-red">ẩn</span>'  !!}</td>
                                        <td><a href="{{route('admin.nha-cung-cap.edit',['id'=>$item->id])}}" class="btn  btn-primary">
                                                <i class="fa fa-fw fa-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btnDelete" data-id="{{ $item->id }}">
                                                <i class="fa fa-fw fa-remove"></i>

                                            </button>
                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix text-right">
                            {{ $data->links() }}
                        </div>
                    </div>
                    <!-- /.box -->


                <!-- /.col -->


            <!-- /.row -->

        </section>

@section('my_js')
    <script type="text/javascript">

        $(document).ready(function() {

            // đính kèm token vào mỗi request ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // suAbidEneUPjfI5mHvWdFbSQ1PsM4OYSm73vF7kZ
                }
            });

            $('.btnDelete').click(function () {

                var id = $(this).attr('data-id'); // lấy thuộc tính của thẻ HTML
                var me = this;

                var result = confirm("Bạn có chắc chắn muốn xóa ?");
                if (result == true) { // neu nhấn == ok , sẽ send request ajax
                    $.ajax({
                        url: '/admin/nha-cung-cap/'+id,
                        type: 'DELETE', // method
                        data: {}, // dữ liệu truyền sang nếu có
                        dataType: "json", // kiểu dữ liệu nhận về
                        success: function (res) { // success : kết quả trả về sau khi gửi request ajax
                            if (res.status == true) {
                                $(me).closest('tr').remove();
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
        <!-- /.content -->


@endsection
