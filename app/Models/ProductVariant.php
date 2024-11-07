<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'Product_variants';

    protected $fillable = [
        'product_id',
        'color',
        'ram',
        'quantity',
        'price',
        'storage',
        'sale_price',
        'status'
    ];

    protected $casts = [
        'quantity' => 'integer',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'status' => 'integer'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
