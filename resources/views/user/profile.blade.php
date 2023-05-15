@include('user.header')

<head>
    <title>Trang cá nhân</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    @include('admin.alert')
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>{{ $user->tennd }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->


                <div class="text-center">
                    <img src="{{ $detail->Anhdaidien }}" class="avatar img-circle img-thumbnail" alt="avatar">
                </div><br>

            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="" id="registrationForm">
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Tên người dùng</h4>
                                    </label>
                                    <label class="form-control" name="tennd"
                                        id="email">{{ $user->tennd }}</label>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name" name="Sdt">
                                        <h4>Số điện thoại</h4>
                                    </label>
                                    <label class="form-control" name="Sdt"
                                        id="email">{{ $detail->Sdt }}</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Địa chỉ</h4>
                                    </label>
                                    <label class="form-control" name="Diachi"
                                        id="email">{{ $detail->Diachi }}</label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email">
                                        <h4>Email</h4>
                                    </label>
                                    <label class="form-control" name="email"
                                        id="email">{{ $user->email }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">

                                    <a href="/user/editprofile">
                                        <button type="button" class="btn btn-primary btn-block"
                                            style="width: 200px; margin-top: 50px ">Cập nhật</button>
                                    </a>
                                </div>
                        </form>

                        <hr>

                    </div>
                    <!--/tab-pane-->
                </div>
                <!--/col-9-->
            </div>
            <!--/row-->
</body>


@include('user.footer')
