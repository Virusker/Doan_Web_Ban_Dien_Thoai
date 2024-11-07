<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'Products';

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
        'name',
        'price',
        'description',
        'quantity',
        'image',
        'category_id',
        'create_at',
        'update_at'
    ];

    // Định nghĩa mối quan hệ với bảng `categories` (giả định có bảng categories)
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->create_at = now()->toDateString();
            $model->update_at = now()->toDateString();
        });

        static::updating(function ($model) {
            $model->update_at = now()->toDateString();
        });
    }
}
