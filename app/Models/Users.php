<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Users extends Authenticatable #extends Model
// {
//     //
//     protected $table = 'Users';
//     protected $primaryKey = 'id';
//     protected $fillable = ['name', 'email', 'password'];
//     public $timestamps = false;
//     // set created_at and updated_at default

// }

class Users extends Authenticatable
{
    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'Users';

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
        'email',
        'password',
        'is_active',
        'remember_token',
    ];

    // Thiết lập các giá trị mặc định cho cột `create_at` và `update_at`
    protected $attributes = [
        'is_active' => 1,  // Giá trị mặc định cho cột `is_active`
    ];

    // Ghi đè phương thức khởi tạo (boot) để tự động đặt giá trị cho `create_at` và `update_at`
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
