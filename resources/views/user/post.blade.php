@include('user/header')
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<form method="POST">
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="/template/hands.png" alt="image" style="width: 150px; height:100px ;" />
                    <label style="color: #E55101">Bạn có đồ vật cần trao đổi?</label>
                    <h2 style="color: #0D1768">Hãy chia sẻ ngay với mọi người!</h2>
                </div>
            </div>
            <div class="col-md-9">
                @include('admin.alert')
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fname" style="margin-bottom: 30px">Tên đồ
                            vật:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Nhập tên đồ vật"
                                name="Tendovat" style="margin-bottom: 30px" value="{{ old('Tendovat') }}">
                        </div>
                        <div class="contact-form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname" style="margin-bottom: 30px">Số
                                    lượng:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname"
                                        placeholder="Nhập số lượng" name="Soluong" style="margin-bottom: 30px"
                                        value="{{ old('Soluong') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lname" style="margin-bottom: 30px">Danh
                                    mục:</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="lname" placeholder="Nhập loại danh mục"
                                name="danhmuc" style="margin-bottom: 30px"> --}}
                                    <select class="form-control" name="id_danhmuc"
                                        style="margin-bottom: 30px; height: 34px;">
                                        @foreach ($menus as $menu)
                                            <option value="{{ $menu->id }}">
                                                {{ $menu->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="" style="margin-bottom: 30px">Giá
                                    trị:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id=""
                                        placeholder="Nhập giá trị đồ vật" name="Gia" style="margin-bottom: 30px"
                                        value="{{ old('Gia') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="comment" style="margin-bottom: 30px">Ghi
                                    chú:</label>
                                <div class="col-sm-10">
                                    <textarea name="Mota" class="form-control" rows="5" id="comment" style="margin-bottom: 30px"> {{ old('Mota') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname" style="margin-bottom: 30px">Ảnh đồ
                                    vật:</label>
                                <div class="col-sm-10 ">
                                    <input type="file" class="form-control" id="upload"
                                        style="margin-bottom: 30px; " />
                                    <input type="hidden" name="Hinhanh" value="" id="hinhanh01">
                                    <div id="hinhanh_show" style="margin-bottom: 30px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default"
                                        style="background-color: #0ee607">Đăng
                                        bài</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
</form>
@include('user/footer')
