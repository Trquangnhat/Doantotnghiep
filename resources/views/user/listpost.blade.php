@include('user.header')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="container mt-5 mb-5" style="background-color: #e7e6e7;">
        <div class="d-flex justify-content-center row">
            @foreach ($posts as $key => $post)
                <div class="col-md-10" style="margin-top: 10px">
                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1" style="padding: 0%;background: #ffffff; justify-items: center,">
                            <img style="margin-top: 10px" class="img-fluid img-responsive rounded product-image"
                                src=" {{ $post->Hinhanh }}">
                        </div>
                        <div class="col-md-4 mt-1">
                            <label
                                style="color: #f13b0e;font-weight:bold; font-size: 20px ">{{ $post->Tendovat }}</label>
                            <div class="mt-1 mb-1 spec-1"><span style="font-size: 20px">
                                    <h4 style="display: inline;">Loại danh mục:</h4>
                                    {{ $post->danhmuc->name }}
                                </span></div>
                            <div class="mt-1 mb-1 spec-1">
                                <label style="font-size: 20px; margin-top: 2px; margin-bottom: -2px">
                                    <h4 style="display: inline;">Số lượng:</h4> {{ $post->Soluong }}
                                </label>
                            </div>
                            <div class="mt-1 mb-1 spec-1"><span style="font-size: 20px;">
                                    <h4 style="display: block;">Ghi chú:</h4>
                                    <div style="white-space: pre-wrap;">{{ $post->Mota }}</div>
                                </span></div>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1"
                            style="display: flex;justify-content: center; align-items: center">
                            <div class="d-flex flex-row align-items-center">
                                <div class="mt-1 mb-1 spec-1">
                                    <span style="font-size: 35px">
                                        <h4>Giá: </h4>{!! \App\Helpers\Helper::price($post->Gia) !!}đ
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="align-items-center align-content-center col-md-2 border-left mt-1"
                            style="display: flex;justify-content: center; align-items: center">
                            <div class="d-flex flex-row align-items-center">
                                <div class="mt-1 mb-1 spec-1">
                                    <span style="font-size: 35px">

                                        {!! \App\Helpers\Helper::trangthai($post->trangthai) !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</body>
@include('user/footer')
