<?php

namespace App\Http\Services;

use App\Models\DetailUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserService
{

    public function update($request)
    {
        $user = Auth::user(); // lấy ra đối tượng người dùng đang đăng nhập
        $user = User::where('id', $user->id)->first();
        $user->tennd = $request->tennd;
        $user->save();
        $detail = DetailUser::where('id_user', $user->id)->first(); // lấy ra đối tượng "DetailUser" với "id_user" bằng "id" của người dùng đang đăng nhập
        $detail->Sdt = $request->Sdt; // cập nhật dữ liệu cho "field1" với giá trị từ request
        $detail->Diachi = $request->Diachi;
        $detail->Anhdaidien = $request->hinhanh;
        $detail->save();
        return redirect()->back()->with('success', 'Cập nhật thông tin thành công.');
    }

    public function getdaduyet()
    {
        return Post::with('baidang')->with('danhmuc')->where('trangthai', 1)->paginate(2);
    }
    public function getdadang()
    {
        $user = Auth::user(); // lấy ra đối tượng người dùng đang đăng nhập
        $user = User::where('id', $user->id)->first();
        return Post::with('baidang')->with('danhmuc')->where('id_user', $user->id)->get();
    }
}
