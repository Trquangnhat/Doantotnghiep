<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Http\Services\UserService;
use App\Http\Services\PostService;
use App\Models\Menu;
use Illuminate\Pagination\Paginator;

use App\Models\Post;

class UserController extends BaseController
{

    protected $UserService, $PostService;
    public function __construct(UserService $UserService, PostService $PostService)
    {
        $this->UserService = $UserService;
        $this->PostService = $PostService;
    }

    public function index()
    {
        $user = Auth::user();
        $detail = $user->detail;
        return view('user.profile', [
            'title' => 'Cập nhật trang cá nhân',
            'user' => $user,
            'detail' => $detail
        ]);
    }

    public function editprofile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $detail = $user->detail;
            return view('user.editprofile', [
                'title' => 'Cập nhật trang cá nhân',
                'user' => $user,
                'detail' => $detail
            ]);
        } else {
            return redirect()->route('login');
        }
    }


    public function show()
    {
        return view('user.newfeed', [
            'title' => 'Trang chủ',
            'posts' => $this->UserService->getdaduyet(),

        ]);
    }

    public function store(Request $request)
    {
        $this->UserService->update($request);
        return redirect()->back();
    }

    // use AuthorizesRequests, ValidatesRequests;
}
