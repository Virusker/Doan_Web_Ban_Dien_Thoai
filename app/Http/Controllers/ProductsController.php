<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class ProductsController extends Controller
{
    //
    public function index(Request $request,$category_id = null){

        #$products = DB::table('Products')->where('category_id',$category_id)->get();

        $products = DB::table("Products")
        ->join("Product_variants", function($join){
            $join->on("Products.id", "=", "Product_variants.product_id");
        })
        ->where("category_id", "=", $category_id)
        ->get();

        // $users = DB::table('users')->where('votes', 100)->get();

        $categories = Category::all();

        return view('products',['products' => $products, 'categories' => $categories]);
    }

    public function product_detail(Request $request,$product_id = null){
        $categories = Category::all();
        $p = DB::table('Products')->where('id', $product_id)->first();

        return view('product_detail',['product' => $p, 'categories' => $categories]);
    }
}
