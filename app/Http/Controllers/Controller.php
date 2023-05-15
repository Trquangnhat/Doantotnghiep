<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function index()
    {
        $totalPosts0 = Post::where('trangthai', '0')->count();
        $totalPosts1 = Post::where('trangthai', '1')->count();
        $totalPosts2 = Post::where('trangthai', '2')->count();
        // $totalUser = User::count();
        $totalUser = User::where('role_id', '2')->count();
        return view('admin.home', compact('totalPosts1', 'totalUser', 'totalPosts0', 'totalPosts2'), [
            'title' => 'Trang Admin',
        ]);
    }

    // use AuthorizesRequests, ValidatesRequests;
}
