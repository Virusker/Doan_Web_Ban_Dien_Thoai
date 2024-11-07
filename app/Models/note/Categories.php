<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'Categories';

    // Khóa chính của bảng
    protected $primaryKey = 'id';

    // Tự động tăng khóa chính
    public $incrementing = true;

    // Định dạng khóa chính là số nguyên (INTEGER)
    protected $keyType = 'int';

    // Không sử dụng cột `created_at` và `updated_at` mặc định của Laravel
    public $timestamps = false;

    // Các trường có thể được gán giá trị hàng loạt (mass assignable)
    protected $fillable = [
        'name'
    ];

    // Định nghĩa mối quan hệ với bảng `products`
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
