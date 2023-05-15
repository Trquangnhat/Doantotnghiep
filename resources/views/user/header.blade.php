<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/template/dist/css/header.css">
<link rel="stylesheet" href="/template/dist/css/sidebar.css">
<link rel="stylesheet" href="/template/dist/css/post.css">
<link rel="stylesheet" href="/template/dist/css/detailpost.css">
@yield('header')
<header style="background-color: #74DF98">
    <section class="navigation">
        <div class="nav-container" style="margin-right: 500px">
            <div class="brand">
                <img src="/template/dist/img/logo.png" style="width: 100px; height: 50px;">
            </div>
            <nav style="margin-right: -410px">

                <ul class="nav-list">
                    <li>
                        <a href="/user/newfeed">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#!">Trao đổi</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="/user/post">Yêu cầu nhận được</a>
                            </li>
                            <li>
                                <a href="#!">Yêu cầu đã gởi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">Bài đăng</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="/user/post">Đăng bài trao đổi</a>
                            </li>
                            <li>
                                <a href="/user/listpost">Xem các bài đã đăng</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        @if (Auth::check())
                            <?php $user = Auth::user(); ?>
                            <?php $detail = $user->detail; ?>
                            <a href="#!"> <img src="{{ $detail->Anhdaidien }}"
                                    class="avatar img-circle img-thumbnail" alt="avatar" style="width: 35px"></a>
                        @else
                            <a href="#!"><img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                    class="avatar img-circle img-thumbnail" alt="avatar" style="width: 35px"></a>
                        @endif

                        <ul class="navbar-dropdown">
                            <li>
                                @if (Auth::check())
                                    <a href="/user/profile">Trang cá nhân</a>
                                @else
                                    <a href="/logout">Đăng nhập</a>
                                @endif
                            </li>
                            <li>
                                @if (Auth::check())
                                    <a href="/logout">Đăng xuất</a>
                                @else
                                    <a href="/logout">Đăng kí</a>
                                @endif
                            </li>
                        </ul>
                    </li>
                    <li>
                        @if (Auth::check())
                            <a href="/user/profile">{{ Auth::user()->tennd }}</a>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </section>

</header>
