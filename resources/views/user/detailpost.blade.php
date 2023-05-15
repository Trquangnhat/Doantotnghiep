<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@include('user.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="{{ $post->Hinhanh }} " class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">{{ $post->Tendovat }}</h4>
                    <p>{{ $post->Mota }}</p>
                    <h2 class="mt-5">
                        {!! \App\Helpers\Helper::price($post->Gia) !!}đ
                    </h2>
                    <button class="btn btn-primary btn-rounded">Mua ngay</button>
                    <button class="btn btn-primary btn-rounded">Trao đổi</button>
                    <h3 class="box-title mt-5">Danh mục: {{ $post->danhmuc->name }}</h3>
                    {{-- <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
                        <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful
                            collectibles</li>
                    </ul> --}}
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">Thông tin liên hệ</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">Tên người bán:</td>
                                    <td>{{ $post->baidang->tennd }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    @foreach ($detail as $detail)
                                        <td>{{ $detail->Diachi }}</td>

                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>

                                    <td>{{ $detail->Sdt }}</td>

                                </tr>
                                <tr>
                                    <td>Ảnh đại diện</td>
                                    <td><img width="100px" src="{{ $detail->Anhdaidien }}" /></td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user.footer')
