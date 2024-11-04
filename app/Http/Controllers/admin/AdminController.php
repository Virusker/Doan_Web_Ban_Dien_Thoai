<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// database
use App\Models\Categories;
use App\Models\Products;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin.index');
    }

    function categories(){
        return view('admin.categories');
    }

    function products(){
        return view('admin.products',['products' => Products::all()]);
    }

    function add_products(){
        return view('admin.add_products',['categories' => Categories::all()]);
    }

    function add_products_post(Request $request){

        $request->validate([
            'name' => 'required',
            // 'price' => 'required',
            // 'description' => 'required',
            // 'category' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // list of allowed file mime types
        $allowedfileExtension=['pdf','jpg','png','docx'];

        // mutiple file upload
        $files = $request->file('image');

        foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            // if($check){
            //     $items = $request->file('image');
            //     foreach($items as $item){
            //         $filename = $item->store('public/files');
            //         $fileModel = new File;
            //         $fileModel->name = $filename;
            //         $fileModel->save();
            //     }
            //     echo "Upload Successfully";
            // }
            // else{
            //     echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
            // }
        }

        $imageName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$request->image->extension();

        // $imageName = $request->name . '_' . time().'.'.$request->image->extension();
        
        echo "<script>console.log('Image Name: " . $imageName . "');</script>";

        $request->image->move(public_path('images'), $imageName);

        $product = new Products;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->image = $imageName;
        $product->save();

        return redirect('/admin/products');
    }
}
