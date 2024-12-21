<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Products';

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'status'
    ];

    protected $casts = [
        'status' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    // get first price of product
    public function getPrice()
    {
        $firstVariant = $this->variants()->first();
        return $firstVariant ? $firstVariant->price : 0;
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(Image::class)->where('is_primary', true);
    }
}
