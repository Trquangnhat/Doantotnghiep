@include('user.header')

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>


<body>
    <div class="container bootstrap snippet">
        <form class="form" action="" method="post" id="registrationForm">

            <div class="row">
                <div class="col-sm-10">
                    <h1>{{ $user->tennd }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <!--left col-->



                    <div class="form-outline mb-4">
                        <div class="text-center" id="hinhanh_show">
                            <img src="{{ $detail->Anhdaidien }}" class="avatar img-circle img-thumbnail">
                        </div>
                        <input type="file" name="Anhdaidien" class="form-control" id="upload" />

                        <input type="hidden" name="hinhanh" value="{{ $detail->Anhdaidien }}" id="hinhanh01">
                    </div>


                </div>
                <!--/col-3-->
                <div class="col-sm-9">

                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="first_name">
                                        <h4>Tên người dùng</h4>
                                    </label>
                                    <input type="text" class="form-control" name="tennd" id="first_name"
                                        placeholder="Tên người dùng" title="Nhập tên người dùng của bạn"
                                        value="{{ $user->tennd }}">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Số điện thoại</h4>
                                    </label>
                                    <input type="text" class="form-control" name="Sdt" id="last_name"
                                        placeholder="Số điện thoại" title="Số điện thoại" value="{{ $detail->Sdt }}">
                                </div>
                            </div>


                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="last_name">
                                        <h4>Địa chỉ</h4>
                                    </label>
                                    <input type="text" class="form-control" name="Diachi" id="last_name"
                                        placeholder="Địa chỉ" title="Địa chỉ" value="{{ $detail->Diachi }}">
                                </div>
                            </div>


                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <label class="form-control" name="email" id="email">{{ $user->email }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" data-toggle="modal"
                                    data-target="#myModal" data-message="Cập nhật trang cá nhân thành công!"><i
                                        class="glyphicon glyphicon-ok-sign"></i>Lưu</button>
                            </div>
                        </div>
                        @csrf

                        <hr>

                    </div>
                    <!--/tab-pane-->
                </div>
                <!--/col-9-->
        </form>

    </div>
    <!--/row-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Thông báo</h4>
                </div>
                <div class="modal-body">
                    <p style="display: flex;justify-content: center;align-items: center" id="modal-message"></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var message = button.data('message'); // Extract info from data-* attributes
                var modal = $(this);
                modal.find('.modal-body #modal-message').text(message);
            });
        });
    </script>
    <style>
        #modal-message {
            font-family: Arial, sans-serif;
            font-size: 25px;
            font-weight: bold;
            color: rgb(32, 226, 15);
        }
    </style>
</body>
@include('user.footer')
