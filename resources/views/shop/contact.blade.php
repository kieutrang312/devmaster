@extends('shop.layout.main')

@section('content')
    <style>
        .contact-us-form{
            padding:10px 40px 0;
            /*margin:0;*/
        }
        .form-1{
            padding-left: 80px;
        }
        .contact-form-center{}
        .contact-form-center h3.contact-subheading{
            font-size:18px;
            line-height:18px;
            text-transform:uppercase;
            font-family:"Open Sans",sans-serif;
            font-weight:600;
            color:#555454;
            margin:10px 0 17px;
        }
        form.contact-form{}
        form.contact-form label{
            display: block;
            margin: 14px 0;
        }
        .con-form-select{
            border: 1px solid #d6d4d4;
        }
        .con-form-select select{
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            opacity: 1;
            height:27px;
            width:100%;
            border: medium none;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: medium none;
            color:#777;
            font-size:12px;
            padding-left:5px;
        }
        .con-form-select select option{}
        .con-form-select select{}
        .con-form-select select option{}
        form.contact-form button.send-message{
            margin: 0;
            padding: 10px 10px 10px 14px;
        }
        form.contact-form button.send-message i{
            margin-left:4px;
        }
        .type-of-text{}
        .type-of-text textarea.contact-text{
            height: 257px;
            resize: none;
            width: 100%;
        }
        .contact-form-group{}
        div.file-uploader {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            cursor: pointer;
            overflow: hidden;
            position: relative;
            width: 203px;
            margin-bottom:50px;
        }
        div.file-uploader input[type=file]{
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border: medium none;
            cursor: default;
            float: left;
            height: 100%;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
        }
        .contact-form-box div.file-uploader span.filename {
            width: 114px;
        }
        div.file-uploader span.action {
            -moz-user-select: none;
            background: rgba(0, 0, 0, 0) url("img/sprite.png") no-repeat scroll 0 -378px;
            color: #fff;
            cursor: pointer;
            display: inline;
            float: right;
            font-size: 13px;
            height: 27px;
            line-height: 27px;
            overflow: hidden;
            text-align: center;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
            width: 94px;
        }
        div.file-uploader span.filename {
            -moz-user-select: none;
            background: #fbfbfb none repeat scroll 0 0;
            border: 1px solid #d6d4d4;
            color: #777;
            font-size: 13px;
            line-height: 27px;
            margin-right: 0px;
            padding:5px 6px;
        }
    </style>
    <div class="contact-us-form">
    <div class="contact-form-center">

        <!-- CONTACT-FORM START -->
        <form class="contact-form" role="form" id="contactForm" method="post" action="{{route('shop.postContact')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-1 col-lg-3 col-md-3 col-sm-4 col-xs-12">

                    <div class="form-group primary-form-group">
                        <label>Họ tên:</label>
                        <input type="text" class="form-control input-feild" id="contactEmail" name="name" value="">
                    </div>
                    <div class="form-group primary-form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control input-feild" id="contactEmail" name="email" value="">
                    </div>
                    <div class="form-group primary-form-group">
                        <label>Điện thoại:</label>
                        <input type="text" class="form-control input-feild" id="contactEmail" name="phone" value="">
                    </div>
{{--                    <div class="form-group primary-form-group">--}}
{{--                        <div class="file-uploader">--}}
{{--                            <label>Ảnh (nếu cần)</label>--}}
{{--                            <input type="file" class="form-control" name="image">--}}
{{--                            <span class="filename">File</span>--}}
{{--                            <span class="action">Choose File</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" name="submit" id="sendMessage" class="send-message main-btn">Send <i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="type-of-text">
                        <div class="form-group primary-form-group">
                            <label>Message</label>
                            <textarea class="contact-text" name="content"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- CONTACT-FORM END -->
    </div>
</div>


@endsection
