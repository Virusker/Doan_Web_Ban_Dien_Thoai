<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index(){

        $carts = DB::table('Carts')
        ->join('Product_variants', 'Carts.product_variant_id', '=', 'Product_variants.id')
        ->join('Products', 'Product_variants.product_id', '=', 'Products.id')
        ->where('Carts.user_id', Auth::user()->id)
        ->select(
            'Carts.quantity as cart_quantity', 
            'Product_variants.*', 
            'Products.name as product_name'
        )
        ->get();

        return view('cart', [
            'carts' => $carts
        ]);
    }

    public function add_cart(Request $request){
        $pv_id = $request->input('pv_id');
        $quantity = $request->input('quantity');

        // check login
        if (!Auth::check()) {
            return 401;
            // The user is logged in...
        }
        // get cart quantity
        $cart = DB::table('Carts')
        ->where('user_id', Auth::user()->id)
        ->where('product_variant_id', $pv_id)
        ->first();

        if ($cart) {
            $new_quantity = $cart->quantity + $quantity;

            DB::table('Carts')
            ->where('user_id', Auth::user()->id)
            ->where('product_variant_id', $pv_id)
            ->update([
                'quantity' => $new_quantity
            ]);
        } else {
            DB::table('Carts')->insert([
                'user_id' => Auth::user()->id,
                'product_variant_id' => $pv_id,
                'quantity' => $quantity
            ]);
            $new_quantity = $quantity;
        }

        // DB::table('Carts')->insert([
        //     'user_id' => Auth::user()->id,
        //     'product_variant_id' => $pv_id,
        //     'quantity' => $new_quantity
        // ]);

        $r = [
            'status' => 200,
            'message' => 'Add to cart successfully',
            'quantity' => $new_quantity
        ];

        return response()->json($r);
    }
    public function update_cart(Request $request){
        $pv_id = $request->input('pv_id');
        $quantity = $request->input('quantity');

        // check login
        if (!Auth::check()) {
            return 401;
            // The user is logged in...
        }
        // get cart quantity
        $cart = DB::table('Carts')
        ->where('user_id', Auth::user()->id)
        ->where('product_variant_id', $pv_id)
        ->first();

        if ($cart) {
            $new_quantity = $quantity;

            DB::table('Carts')
            ->where('user_id', Auth::user()->id)
            ->where('product_variant_id', $pv_id)
            ->update([
                'quantity' => $new_quantity
            ]);
        } else {
            DB::table('Carts')->insert([
                'user_id' => Auth::user()->id,
                'product_variant_id' => $pv_id,
                'quantity' => $quantity
            ]);
            $new_quantity = $quantity;
        }

        // DB::table('Carts')->insert([
        //     'user_id' => Auth::user()->id,
        //     'product_variant_id' => $pv_id,
        //     'quantity' => $new_quantity
        // ]);

        $r = [
            'status' => 200,
            'message' => 'Update cart successfully',
            'quantity' => $new_quantity
        ];

        return response()->json($r);
    }
    public function remove_cart(Request $request){
        $pv_id = $request->input('pv_id');

        // check login
        if (!Auth::check()) {
            return 401;
            // The user is logged in...
        }
        // get cart quantity
        $cart = DB::table('Carts')
        ->where('user_id', Auth::user()->id)
        ->where('product_variant_id', $pv_id)
        ->first();

        if ($cart) {
            DB::table('Carts')
            ->where('user_id', Auth::user()->id)
            ->where('product_variant_id', $pv_id)
            ->delete();
        }

        $r = [
            'status' => 200,
            'message' => 'Remove cart successfully'
        ];

        return response()->json($r);
    }
    public function checkout(){
        $carts = DB::table('Carts')
        ->join('Product_variants', 'Carts.product_variant_id', '=', 'Product_variants.id')
        ->join('Products', 'Product_variants.product_id', '=', 'Products.id')
        ->where('Carts.user_id', Auth::user()->id)
        ->select(
            'Carts.quantity as cart_quantity', 
            'Product_variants.*', 
            'Products.name as product_name'
        )
        ->get();
        return view('checkout', [
            'carts' => $carts
        ]);
    }

}
