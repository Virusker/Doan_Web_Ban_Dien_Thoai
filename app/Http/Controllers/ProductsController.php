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
        // $products = Product::where('category_id', $category_id)->get();
        // $users = DB::table('users')->where('votes', 100)->get();

        $page = (int) $request->input('page', 1);
        $limit = 4;
        $offset = ($page - 1) * $limit;

        

        $products = DB::table('Products')
        ->join('Images', 'Products.id', '=', 'Images.product_id')
        ->where('Images.is_primary', true)
        ->select('Products.*', 'Images.*')
        ->where('category_id', $category_id)
        ->addSelect(DB::raw('(SELECT price FROM Product_variants WHERE Product_variants.product_id = Products.id LIMIT 1) as representative_price'))
        ->orderBy('Products.created_at', 'desc')
        ->limit($limit)
        ->offset($offset)
        ->get();

        $total_page=(int) ceil(DB::table('Products')->where('category_id', $category_id)->count() / $limit);
        return view('products',['products' => $products,'tp' => $total_page,'page' => $page]);
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

        $imgages = DB::table('Images')
        ->where('product_id', $product_id)
        ->where('is_primary', 0)
        ->get();

        $product_variants = DB::table('Product_variants')
        ->where('product_id', $product_id)
        ->get();


        return view('product_detail',['product' => $product,'product_variants' => $product_variants,'images' => $imgages]);
    }
    public function search(Request $request){
        $search = $request->input('q');

        // $products = DB::table('Products')
        // ->join('Images', 'Products.id', '=', 'Images.product_id')
        // ->where('name', 'like', '%'.$search.'%')
        // ->where('is_primary', 1)
        // ->get();

        $products = DB::table('Products')
            ->join('Images', 'Products.id', '=', 'Images.product_id')
            ->where('Images.is_primary', true)
            ->select('Products.*', 'Images.*')
            ->addSelect(DB::raw('(SELECT price FROM Product_variants WHERE Product_variants.product_id = Products.id LIMIT 1) as representative_price'))
            ->orderBy('Products.created_at', 'desc')
            ->where('name', 'like', '%'.$search.'%')
            ->get();

        return view('products',['products' => $products]);
    }
}
