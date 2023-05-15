<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Services\AccService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AccController extends Controller
{
    protected $AccService;
    public function __construct(AccService $AccService)
    {
        $this->AccService = $AccService;
    }


    public function index()
    {
        return view('admin.acc.list', [
            'title' => 'Danh sách tài khoản',
            'accs' => $this->AccService->getuser()
        ]);
    }

    public function index2()
    {
        return view('admin.acc.listAdmin', [
            'title' => 'Danh sách tài khoản',
            'accs' => $this->AccService->getadmin()
        ]);
    }

    public function create()
    {
        return view('admin.acc.add', [
            'title' => 'Thêm Tài Khoản Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->AccService->create($request);
        return redirect('/admin/accs/list');
    }

    public function show(User $acc)
    {
        return view('admin.acc.edit', [
            'title' => ' Chỉnh sửa tài khoản : ' . $acc->tennd,
            'acc' => $acc,

        ]);
    }
    public function update(User $acc, Request $request)
    {
        $this->AccService->update($request, $acc);
        return redirect('/admin/accs/list');
    }

    public function destroy(Request $request)
    {
        $result = $this->AccService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }

        return response()->json(['error' => true]);
    }
}
