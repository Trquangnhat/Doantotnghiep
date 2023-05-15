@extends('admin.main')

@section('content')

    <body>
        <form action="" method="POST">
            <div class="card-body">

                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Kích hoạt</label>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                            checked>
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                        <label for="no_active" class="custom-control-label">Không</label>
                    </div>

                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                        data-message="Tạo danh mục thành công!">Tạo danh mục</button>
                </div>
                @csrf
        </form>
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
