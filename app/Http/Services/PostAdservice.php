<?php


namespace App\Http\Services;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PostAdservice
{
    public function getdaduyet()
    {
        return Post::with('baidang')->with('danhmuc')->where('trangthai', 1)->get();
    }
    public function getchuaduyet()
    {
        return Post::with('baidang')->with('danhmuc')->where('trangthai', 0)->get();
    }
    public function getbikhoa()
    {
        return Post::with('baidang')->with('danhmuc')->where('trangthai', 2)->get();
    }
    public function update($post, $request)
    {
        $post->trangthai = $request->input('trangthai');
        $post->save();
        Session::flash('success', 'Duyệt bài thành công thành công');
        return true;
    }
}
