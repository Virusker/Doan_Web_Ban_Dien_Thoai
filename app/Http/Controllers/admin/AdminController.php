<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// database
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Image;

class AdminController extends Controller
{
    //
    function index(){
        return view('admin.index');
    }

    function categories(){
        return view('admin.categories',['categories' => Category::all()]);
    }

    function add_category(){
        return view('admin.add_category');
    }

    function add_category_post(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect('/admin/categories');
    }
    function del_category(Request $request,$category_id = null){

        if ($category_id == null){
            return redirect('/admin/categories');
        }
        $category = Category::find($category_id);
        $category->delete();

        return redirect('/admin/categories');
    }

    function update_category(Request $request,$category_id = null){
        if ($category_id == null){
            return redirect('/admin/categories');
        }
        $category = Category::find($category_id);
        return view('admin.update_category',['category' => $category]);
    }

    function update_category_post(Request $request){
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);
        // return "Update Category $request->category_id : $request->name";

        $category = Category::find($request->category_id);
        if (!$category){
            return redirect('/admin/categories');
        }
        $category->name = $request->name;
        $category->save();

        return redirect('/admin/categories');
    }


    function products(){
        // join products and product_variants
        // $products = Product::join('Product_variants', 'Products.id', '=', 'Product_variants.product_id')->get();

        $products = Product::all();
        return view('admin.products',['products' => $products]);
    }
   
    function add_product(Request $request,$product_id = null){
        $product = null;
        if ($product_id != null){
            $product = Product::find($product_id);
            // return "Product Found";
            // return view('admin.add_products',['product' => $product,'categories' => Category::all()]);
        }
        // return "Product Found";
        return view('admin.add_products',['product' => $product,'categories' => Category::all()]);
        // return view('admin.add_products',['categories' => Category::all()]);
    }

    function add_product_post(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'imageprimary' => 'image|mimes:jpeg,png,jpg|max:5120',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // add product

        // check if product already exists just add variant

        $product = Product::where('name', $request->name)->first();

        if(!$product){
            $product = new Product;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->save();
        }


        // add_product_image

        if ($request->hasFile('imageprimary')) {
            $imageprimaryName = pathinfo($request->imageprimary->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$request->imageprimary->extension();
            $request->imageprimary->move(public_path('images/products'), $imageprimaryName);      
            $image = new Image;
            $image->product_id = $request->product_id;
            $image->image_url = $imageprimaryName;
            $image->is_primary = true;
            $image->save();
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$image->extension();
                $image->move(public_path('images/products'), $imageName);      
                $image = new Image;
                $image->product_id = $request->product_id;
                $image->image_url = $imageName;
                $image->is_primary = false;
                $image->save();
            }
        }

        return redirect('/admin/products');
    }

    function del_product(Request $request,$product_id = null){

        if ($product_id == null){
            return redirect('/admin/products');
        }
        $product = Product::find($product_id);
        // check if product has variants

        if ($product){
            $product->delete();
        }

        return redirect('/admin/products');
    }

    function update_product(Request $request,$product_id = null){
        if ($product_id == null){
            return redirect('/admin/products');
        }
        $product = Product::find($product_id);
        return view('admin.update_product',['product' => $product,'categories' => Category::all()]);
    }

    function update_product_post(Request $request){
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'imageprimary' => 'image|mimes:jpeg,png,jpg|max:5120',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $product = Product::find($request->product_id);
        if (!$product){
            return redirect('/admin/products');
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->save();

        if ($request->hasFile('imageprimary')) {
            $imageprimaryName = pathinfo($request->imageprimary->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$request->imageprimary->extension();
            $request->imageprimary->move(public_path('images/products'), $imageprimaryName);      
            $image = new Image;
            $image->product_id = $request->product_id;
            $image->image_url = $imageprimaryName;
            $image->is_primary = true;
            $image->save();
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$image->extension();
                $image->move(public_path('images/products'), $imageName);      
                $image = new Image;
                $image->product_id = $request->product_id;
                $image->image_url = $imageName;
                $image->is_primary = false;
                $image->save();
            }
        }

        return redirect('/admin/products');
    }

    function product_variants(){
        // list of product variants sorted by product_id
        $product_variants = ProductVariant::orderBy('product_id')->get();

        // $product_variants = ProductVariant::all();
        return view('admin.product_variants',['product_variants' => $product_variants]);
    }

    function add_product_variant(Request $request,$product_id = null){
        $products = Product::all();

        return view('admin.add_product_variant',['products' => $products,'product_id' => $product_id]);
    }
    function add_product_variant_post(Request $request){
        $request->validate([
            'product_id' => 'required',
            'price' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            // 'imageprimary' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $product_variant = new ProductVariant;
        $product_variant->product_id = $request->product_id;
        $product_variant->price = $request->price;
        $product_variant->ram = $request->ram;
        $product_variant->storage = $request->storage;
        $product_variant->color = $request->color;
        $product_variant->quantity = $request->quantity;
        $product_variant->save();
        return redirect('/admin/product_variants');
    }

    function del_product_variant(Request $request,$product_variant_id = null){

        if ($product_variant_id == null){
            return redirect('/admin/products');
        }
        $product_variant = ProductVariant::find($product_variant_id);
        if ($product_variant){
            $product_variant->delete();
        }

        return redirect('/admin/product_variants');
    }

    function update_product_variant(Request $request,$product_variant_id = null){
        if ($product_variant_id == null){
            return redirect('/admin/product_variants');
        }
        $product_variant = ProductVariant::find($product_variant_id);

        $products = Product::all();
        return view('admin.update_product_variant',
                        ['product_variant' => $product_variant,
                        'products' => $products]);
    }

    function update_product_variant_post(Request $request){
        $request->validate([
            'product_variant_id' => 'required',
            'price' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $product_variant = ProductVariant::find($request->product_variant_id);
        if (!$product_variant){
            return redirect('/admin/product_variants');
        }

        $product_variant->price = $request->price;
        $product_variant->ram = $request->ram;
        $product_variant->storage = $request->storage;
        $product_variant->color = $request->color;
        $product_variant->quantity = $request->quantity;
        $product_variant->save();

        // update product variant image

        $images = Image::find($request->product_variant_id);

        if ($images){
            $imageprimaryName = pathinfo($request->imageprimary->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time().'.'.$request->imageprimary->extension();
            $request->imageprimary->move(public_path('images/products'), $imageprimaryName);
            
            $images->name = $imageprimaryName;
            $images->is_primary = true;
            $images->save();
        }

        return redirect('/admin/product_variants');
    }
}
