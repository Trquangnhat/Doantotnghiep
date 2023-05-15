<?php

namespace App\Http\Services;

use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class PostService
{
    public function create($request)
    {
        $request->validate([
            'Tendovat' => 'required',
            'Soluong' => 'required|numeric|min:1',
            'Gia' => 'required|numeric|min:1000',
        ], [
            'Soluong.required' => 'Nhập tên đồ vật',
            'Soluong.min' => 'Số lượng không được bé hơn 1',
            'Soluong.required' => 'Nhập số lượng đồ vật',
            'Gia.min' => 'Giá không được bé hơn 1',
            'Gia.required' => 'Nhập giá đồ vật',
        ]);

        $current_user = Auth::user()->id;
        try {

            Post::create([
                'id_user' => $current_user,
                'Tendovat' => (string) $request->input('Tendovat'),
                'Soluong' => (string) $request->input('Soluong'),
                'id_danhmuc' => (string) $request->input('id_danhmuc'),
                'Mota' => (string) $request->input('Mota'),
                'Hinhanh' => (string) $request->input('Hinhanh'),
                'Gia' => (string) $request->input('Gia'),

            ]);

            Session::flash('success', 'Đăng bài thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
    public function getdanhmuc()
    {
        return Menu::orderByDesc('id')->where('active', 1)->paginate(20);
    }
}
