<header class="main-header">
    <!-- Logo -->
    <a href="/backend/index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">TQL</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Trang Quản Lý</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- user Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img
{{--                            @if(isset(Auth::user()->avatar)) --}}
{{--                                 @else     src="/backend/dist/img/user2-160x160.jpg"--}}
{{--                                  @endif--}}
                            src="/backend/dist/img/user2-160x160.jpg"
                                 class="user-image" alt="User Image">
                        <span class="hidden-xs">
                            @if(Auth::check())
                                {{ Auth::user()->name }}
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- user image -->
                        <li class="user-header">
                            <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                @if(Auth::check())
                                    {{ Auth::user()->name }}
                                @endif

                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat">Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
