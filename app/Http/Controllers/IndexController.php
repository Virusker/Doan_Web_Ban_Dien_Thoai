<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductVariants;
use App\Models\Category;

use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {

        // join products and product_variants
        // $products = Product::join('Product_variants', 'products.id', '=', 'Product_variants.product_id');

        // $products = DB::table('Products')
        //     ->join('Product_variants', 'Products.id', '=', 'Product_variants.product_id')
        //     ->select('Products.*', 'Product_variants.*')
        //     ->get();
        // $products_new = Product::all();

        $products_new = array();
        $products_popular = array();

        return view('index',['products_new' => $products_new,'products_popular' => $products_popular]);
    }
}
