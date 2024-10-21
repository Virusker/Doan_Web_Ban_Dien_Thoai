<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class indexController extends Controller
{
    public function index()
    {
        // foreach(User::all() as $user){
        //     echo $user->name . "<br>";
        // }
        return view('index',['products' => Products::all()]);
    }
}
