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
        // $products_new = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $products_new = DB::table('Products')
            ->join('Images', 'Products.id', '=', 'Images.product_id')
            ->where('Images.is_primary', true)
            ->select('Products.*', 'Images.*')
            ->addSelect(DB::raw('(SELECT price FROM Product_variants WHERE Product_variants.product_id = Products.id LIMIT 1) as representative_price'))
            ->orderBy('Products.created_at', 'desc')
            ->limit(8)
            ->get();


        // $products_new = array();
        // $products_popular = array();
        $products_popular = DB::table('Products')
            ->join('Product_variants', 'Products.id', '=', 'Product_variants.product_id')
            ->join('Images', 'Products.id', '=', 'Images.product_id')
            ->join('Order_details', 'Product_variants.id', '=', 'Order_details.product_variant_id')
            ->where('Images.is_primary', true)
            ->select('Products.*', 'Product_variants.*', 'Images.*')
            ->orderBy('Order_details.quantity', 'desc')
            ->limit(8)
            ->get();

        return view('index',['products_new' => $products_new,'products_popular' => $products_popular]);
    }
}