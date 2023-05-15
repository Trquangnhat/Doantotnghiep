@include('user.header')

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 600px"
                src="  https://suno.vn/blog/wp-content/uploads/2020/06/boxme-kinh-doanh-hang-gia-dung-1250x800.jpg  "
                class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img style="height: 600px"
                src="https://photo2.tinhte.vn/data/attachment-files/2021/09/5645921_Cover_Gadget.jpg"
                class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img style="height: 600px" src="https://hewel.com.vn/files/image/523-vai-thoi-trang-cac-loai.jpg"
                class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<body style="background-color: #e7e6e7">
    {{-- sldebar --}}
    <div style="display: flex">
        <div class="sidebar">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="menu-item has-dropdown">
                    <a href="#">Danh mục</a>
                    <ul class="submenu">
                        <li><a href="#">Sản phẩm 1</a></li>
                        <li><a href="#">Sản phẩm 2</a></li>
                        <li><a href="#">Sản phẩm 3</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
        @foreach ($posts as $key => $post)
            <div class="container mt-5 mb-5" style="background-color: #e7e6e7;">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1" style="padding: 0%;background: #ffffff; justify-items: center,">
                                <img style="margin-top: 10px" class="img-fluid img-responsive rounded product-image"
                                    src="{{ $post->Hinhanh }}">
                            </div>
                            <div class="col-md-6 mt-1">
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
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="mt-1 mb-1 spec-1"><span style="font-size: 25px">
                                            <h5>Giá: </h5>{!! \App\Helpers\Helper::price($post->Gia) !!}đ
                                        </span></div>
                                </div>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button"><a
                                            href="/user/detailpost/{{ $post->id }}" style="color: #e7e6e7">Xem
                                            chi tiết</a></button>
                                    <div style="display: flex; align-items: center; ">
                                        <button style="color: #7f01b9; font-size: 20px"
                                            class="btn btn-outline-primary btn-sm mt-2" type="button">Trao đổi</button>
                                        <button style="color: #7f01b9;font-size: 20px"
                                            class="btn btn-outline-primary btn-sm mt-2" type="button">Mua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach

    </div>
    </div>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <div class="pagination d-flex justify-content-center">
            {{ $posts->onEachSide(1)->links('pagination::bootstrap-4', ['format' => ':number']) }}
        </div>
    </div>
</body>

@include('user.footer')
