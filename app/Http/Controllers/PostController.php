<?php

namespace App\Http\Controllers;

use App\Http\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Models\DetailUser;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    protected $PostService, $UserService;
    public function __construct(PostService $PostService, UserService $UserService)
    {
        $this->PostService = $PostService;
        $this->UserService = $UserService;
    }

    public function crpost()
    {
        return view('user.post', [
            'title' => 'Đăng bài',
            'menus' => $this->PostService->getdanhmuc()
        ]);
    }

    public function store(Request $request)
    {
        $this->PostService->create($request);
        return redirect()->back();
    }

    public function list()
    {
        return view('user.listpost', [
            'title' => 'Danh sách bài đã đăng',
            'posts' => $this->UserService->getdadang(),
        ]);
    }
    public function detail(Post $post, DetailUser $detailuser)
    {

        $editpost = $post;
        $detail = DetailUser::where('id_user', $editpost->id_user)->get();
        $user = $editpost->baidang;
        $tendanhmuc = $editpost->danhmuc;
        return view('user.detailpost', [
            'title' => 'Chi tiết bài đăng',
            'post' => $editpost,
            'user' => $user,
            'tendanhmuc' => $tendanhmuc,
            'detail' => $detail
        ]);
    }
}
