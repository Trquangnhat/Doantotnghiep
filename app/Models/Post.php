<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'baidang';
    protected $fillable = [
        'id_user',
        'Tendovat',
        'Soluong',
        'id_danhmuc',
        'Mota',
        'Hinhanh',
        'Gia',
        'trangthai',
        'Phithu',
    ];
    public function baidang()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function danhmuc()
    {
        return $this->belongsTo(Menu::class, 'id_danhmuc', 'id');
    }
}
