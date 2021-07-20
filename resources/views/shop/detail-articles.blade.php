@extends('shop.layout.main')

@section('content')
    <div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="/" target="_self">Trang chủ</a></li>

                        <li class="active"><span>Dịch vụ</span></li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="content" class="clearfix container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 " id="layout-page">
<span class="header-page clearfix">
			 <h1 style="font-size: 30px;">{{$article->title}}</h1>
		</span>
                <div class="content-page">
                    <img src="{{ asset($article->image) }}" data-mce-src="./file.hstatic.net/1000177652/file/suachua_baoduong_big_yellow_master.jpg">
                    <p>{!! $article->description !!}</p>


                </div>
        </div>
        </div>
    </section>
@endsection
