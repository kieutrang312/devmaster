@extends('shop.layout.main')

@section('content')
    <div class="wrap-breadcrumb">
        <div class="clearfix container">
            <div class="row main-header">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li><a href="/" target="_self">Trang chủ</a></li>



                        <li class="active"><span>Blog - Tin tức</span></li>


                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="content" class="clearfix container">
        <div class="row">
            <div id="blog" class="page-content main-content content-pages" data-sticky_parent>

                <!-- Begin content -->
                <div class="blog-content col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-3  col-sm-12 col-xs-12 leftsidebar-col" data-sticky_column>
                            <!-- Begin sidebar blog -->
                            <div class="sidebar ">
                                <div class="group_sidebar">
                                    <div class="list-group navbar-inner ">


                                        <div>
                                            <h3 class="sb-title">Danh mục blog</h3>
                                        </div>

                                        <ul class="nav navs sidebar menu" id="menu-blog">




                                            <li class="item  first">
                                                <a href="/collections/dong-ho-nam">
                                                    <span>Đồng hồ nam</span>
                                                </a>
                                            </li>





                                            <li class="item  ">
                                                <a href="/collections/dong-ho-nu">
                                                    <span>Đồng hồ nữ</span>
                                                </a>
                                            </li>





                                            <li class="item  ">
                                                <a href="/collections/dong-ho-tre-em">
                                                    <span>Phụ kiện</span>
                                                </a>
                                            </li>



                                        </ul>

                                    </div>



                                </div>
                                <!-- End: Danh mục tin tức -->






                                <!--Begin: Bài viết mới nhất-->
{{--                                <div class=" group_sidebar">--}}
{{--                                    <h3 class="sb-title">--}}
{{--                                        Bài viết mới nhất--}}
{{--                                    </h3>--}}










{{--                                    <div class="article seller-item">--}}

{{--                                        <div class="sellers-img">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho"--}}
{{--                                               class="products-block-image content_img clearfix">--}}
{{--                                                <img src="./file.hstatic.net/1000177652/article/bao-duong-dong-ho-deo-tay-3_large.jpg"--}}
{{--                                                     alt="GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG ĐỒNG HỒ" /></a>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-content has-sellers-img ">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG VÀ BẢO--}}
{{--                                                DƯỠNG ĐỒNG HỒ</a><span class="date"> <i--}}
{{--                                                    class="fa fa-calendar-o"></i>26/03/2017</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="article seller-item">--}}

{{--                                        <div class="sellers-img">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho"--}}
{{--                                               class="products-block-image content_img clearfix">--}}
{{--                                                <img src="./file.hstatic.net/1000177652/article/bao-duong-dong-ho-deo-tay-3_large.jpg"--}}
{{--                                                     alt="GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG ĐỒNG HỒ" /></a>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-content has-sellers-img ">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG VÀ BẢO--}}
{{--                                                DƯỠNG ĐỒNG HỒ</a><span class="date"> <i--}}
{{--                                                    class="fa fa-calendar-o"></i>26/03/2017</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="article seller-item">--}}

{{--                                        <div class="sellers-img">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho"--}}
{{--                                               class="products-block-image content_img clearfix">--}}
{{--                                                <img src="./file.hstatic.net/1000177652/article/bao-duong-dong-ho-deo-tay-3_large.jpg"--}}
{{--                                                     alt="GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG ĐỒNG HỒ" /></a>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-content has-sellers-img ">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG VÀ BẢO--}}
{{--                                                DƯỠNG ĐỒNG HỒ</a><span class="date"> <i--}}
{{--                                                    class="fa fa-calendar-o"></i>26/03/2017</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="article seller-item">--}}

{{--                                        <div class="sellers-img">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho"--}}
{{--                                               class="products-block-image content_img clearfix">--}}
{{--                                                <img src="./file.hstatic.net/1000177652/article/bao-duong-dong-ho-deo-tay-3_large.jpg"--}}
{{--                                                     alt="GỢI Ý SỬ DỤNG VÀ BẢO DƯỠNG ĐỒNG HỒ" /></a>--}}
{{--                                        </div>--}}

{{--                                        <div class="post-content has-sellers-img ">--}}
{{--                                            <a href="/blogs/news/goi-y-su-dung-dong-ho">GỢI Ý SỬ DỤNG VÀ BẢO--}}
{{--                                                DƯỠNG ĐỒNG HỒ</a><span class="date"> <i--}}
{{--                                                    class="fa fa-calendar-o"></i>26/03/2017</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}




{{--                                </div>--}}
                                <!--End: Bài viết mới nhất-->





                            </div>
                            <!-- End sidebar blog -->
                        </div>

                        <div class="col-md-9 col-sm-12 col-xs-12 " id="blog-container" data-sticky_column>
                            <div class="row">
                                <div class="articles clearfix" id="layout-page">
                                    <div class="col-md-12  col-sm-12 col-xs-12">
                                        <h1>Tin tức</h1>
                                    </div>

                                    <!-- Begin: Nội dung blog -->





                                    @foreach($articles as $article)
                                    <div class="news-content">

                                        <div class="col-md-5 col-xs-12 col-sm-12 img-article">
                                            <div class="art-img">
                                                <a href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">
                                                <img src="{{ asset($article->image) }}"
                                                     alt="{{$article->title}}">
                                                </a>
                                            </div>
                                        </div>


                                        <div class=" col-md-7 col-sm-12  col-xs-12">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h2 class="title-article"><a
                                                    href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}">{{$article->title}}</a></h2>
                                            <div class="body-content">
                                                <ul class="info-more">
                                                    <li><i class="fa fa-calendar-o"></i><time pubdate
                                                                                              datetime="">{{$article->created_at}}</time></li>
                                                    <li><i class="fa fa-file-text-o"></i><a href="#"> Tin
                                                            tức </a> </li>

                                                </ul>
                                                <p>{!!  str_limit($article->description, $limit = 270, $end = '...') !!}</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore btn-rb clear-fix"
                                               href="{{ route('shop.detailArticle', ['slug' => $article->slug]) }}" role="button">Xem
                                                tiếp <span class="fa fa-angle-double-right"></span></a>
                                        </div>


                                    </div>
                                    <hr class="line-blog" />

                                @endforeach


                                    <!-- End: Nội dung blog -->

                                </div>
{{--                                <div class="col-md-12 col-sm-12 col-xs-12 ">--}}
{{--                                    <div class="clearfix">--}}
{{--                                        <div id="pagination" class="">--}}
{{--                                            {!! $article->links() !!}--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>


                    </div>
                </div>
                <!-- End content -->

            </div>
        </div>
    </section>

@endsection
