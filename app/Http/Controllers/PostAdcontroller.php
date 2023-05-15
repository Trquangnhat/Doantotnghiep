<?php

namespace App\Http\Controllers;

use App\Http\Services\PostAdservice;
use App\Models\Post;
use Illuminate\Http\Request;

class PostAdcontroller extends Controller
{
    protected $PostAdservice;
    public function __construct(PostAdservice $PostAdservice)
    {
        $this->PostAdservice = $PostAdservice;
    }

    public function index()
    {

        return view('admin.post.approved', [
            'title' => 'Danh sách bài đăng đã duyệt',
            'posts' => $this->PostAdservice->getdaduyet(),

        ]);
    }
    public function index2()
    {
        return view('admin.post.notapproved', [
            'title' => 'Danh sách bài đăng chưa duyệt',
            'posts' => $this->PostAdservice->getchuaduyet()
        ]);
    }
    public function index3()
    {
        return view('admin.post.lockposts', [
            'title' => 'Danh sách bài đăng bị khóa',
            'posts' => $this->PostAdservice->getbikhoa()
        ]);
    }
    public function show(Post $post)
    {
        $editpost = $post;
        $user = $editpost->baidang;
        $tendanhmuc = $editpost->danhmuc;
        return view('admin.post.edit', [
            'title' => ' Kiểm tra bài đăng: ', $post->Tendovat,
            'post' => $editpost,
            'user' => $user,
            'tendanhmuc' => $tendanhmuc
        ]);
    }
    public function update(Post $post, Request $request)
    {
        $this->PostAdservice->update($post, $request);
        return redirect('/admin/posts/daduyet');
    }
}
