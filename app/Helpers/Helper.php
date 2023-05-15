<?php


namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{


    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }
    public static function trangthai($trangthai = 0): string
    {
        return $trangthai == 0 ? '<span class="btn btn-warning btn-xs">CHỜ DUYỆT</span>'
            : ($trangthai == 1 ? '<span class="btn btn-success btn-xs">ĐÃ DUYỆT</span>'
                : '<span class="btn btn-danger btn-xs">BỊ KHÓA</span>');
    }
    public static function price($gia)
    {
        return number_format($gia);
    }
}
