<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index(Request $request,$category_id = null){

        #$products = DB::table('Products')->where('category_id',$category_id)->get();

        // $products = DB::table("Products")
        // ->join("Product_variants", function($join){
        //     $join->on("Products.id", "=", "Product_variants.product_id");
        // })
        // ->where("category_id", "=", $category_id)
        // ->get();

        // $products = DB::table('Products')
        // // ->join('Product_variants', 'Products.id', '=', 'Product_variants.product_id')
        // ->join('Images', 'Products.id', '=', 'Images.product_id')
        // ->where('category_id', $category_id)
        // ->where('is_primary', 1)
        // ->get();
        $products = Product::where('category_id', $category_id)->get();
        // $users = DB::table('users')->where('votes', 100)->get();

       

        return view('products',['products' => $products]);
    }

    public function product_detail(Request $request,$product_id = null){
        // $p = DB::table('Products')->where('id', $product_id)->first();
        // $product = Product::find($product_id);
        $product = DB::table('Products')
        ->join('Images', 'Products.id', '=', 'Images.product_id')
        ->join('Product_variants', 'Products.id', '=', 'Product_variants.product_id')
        ->where('Products.id', $product_id)
        ->select('Products.*', 'Images.*', 'Product_variants.*')
        ->first();

        $product_variants = DB::table('Product_variants')
        ->where('product_id', $product_id)
        ->get();


        return view('product_detail',['product' => $product,'product_variants' => $product_variants]);
    }
}
