@extends('admin.main')

@section('content')

    <body>
        <div>
            <form action="" method="POST">
                <div class="card-body ">
                    <label for="menu">Họ và Tên</label>
                    <div class="input-group mb-3">
                        <input type="text" name="tennd" class="form-control" value="{{ $acc->tennd }}"
                            placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <label for="menu">Email</label>
                    <div class="input-group mb-3">
                        {{-- <input type="text" name="email" class="form-control" value="{{ $acc->email }}" placeholder="Email"> --}}
                        <label name="email" class="form-control">{{ $acc->email }}</label>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    {{-- <label for="menu">Mật Khẩu(Đã được mã hóa)</label>
            <div class="input-group mb-3">
                <input type="password" id="password" name="password" class="form-control"
                    value="{{ $acc->password }}"placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span id="toggle-password" class="toggle-password" onclick="togglePasswordVisibility()">
                            <i class="fas fa-eye-slash"></i></span>
                    </div>
                </div>
            </div> --}}
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                                {{ $acc->trangthai == 1 ? ' checked=""' : '' }}>
                            <label for="active" class="custom-control-label">Kích Hoạt</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                                {{ $acc->trangthai == 0 ? ' checked=""' : '' }}>
                            <label for="no_active" class="custom-control-label">Hủy Kích Hoạt</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Phân Quyền</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="admin" name="role_id" value="1"
                                {{ $acc->role_id == 1 ? 'checked=""' : '' }}>
                            <label class="custom-control-label" for="admin">Admin</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="khachhang" name="role_id" value="2"
                                {{ $acc->role_id == 2 ? 'checked=""' : '' }}>
                            <label class="custom-control-label" for="khachhang">Khách hàng</label>
                        </div>

                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4">
                            <button class="btn btn-primary btn-block" type="submit" data-toggle="modal"
                                data-target="#myModal" data-message="Cập nhật thành công!">Cập nhật</button>

                        </div>
                        <!-- /.col -->
                    </div>
                    @csrf


            </form>
        </div>
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
            $('#myModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var message = button.data('message') // Extract info from data-* attributes
                var modal = $(this)
                modal.find('.modal-body p').text(message)
            })
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
@endsection
@include('user.footer')
