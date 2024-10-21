<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'Products';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'brand', 'price','quantity', 'description', 'image'];
    public $timestamps = false;
    // set created_at and updated_at default
    // secondary table
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_category');
    }

}
