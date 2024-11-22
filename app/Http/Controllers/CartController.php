<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CartController extends Controller
{
    //
    public function index(){

        $categories = Category::all();

        return view('cart',['categories' => $categories]);
    }


}
