<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img
                    src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> @if(Auth::check())
                        {{ Auth::user()->name }}
                    @endif</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active">
                <a href="{{route('admin.danh-muc.index')}}">
                    <i class=" fa fa-dashboard"></i> <span>QL Danh Mục</span>
                    <span class="pull-right-container">

            </span>
                </a>
            </li>
            <li>

            <li class="">
                <a href="{{route('admin.product.index')}}">
                    <i class="fa fa-database"></i> <span>QL Sản Phẩm</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
            <li class="">
                <a href="{{route('admin.nha-cung-cap.index')}}">
                    <i class="fa fa-cube"></i> <span>QL Nhà Cung Cấp</span>
                    <span class="pull-right-container">

            </span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.banner.index')}}">
                    <i class="fa fa-photo"></i> <span>QL Banner</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.user.index')}}">
                    <i class="fa fa-user"></i> <span>QL Người Dùng</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.article.index')}}">
                    <i class="fa fa-file-text"></i> <span>QL Tin Tức</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.setting.index')}}">
                    <i class="fa fa-cog"></i> <span>Cấu Hình Website</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
