<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'payment_method',
        'customer_name',
        'customer_phone',
        'shipping_address'
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
        'status' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // Helper method to get status label
    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            0 => 'Cancelled',
            1 => 'Pending',
            2 => 'Confirmed',
            3 => 'Shipping',
            4 => 'Completed',
            default => 'Unknown'
        };
    }
}
