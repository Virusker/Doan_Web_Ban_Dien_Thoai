@extends('layout_admin/layout')

@section('title', 'admin - Add Products')



@section('content')


    <h2>admin add product</h2>

    <form action="/admin/add_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input value="{{ $product->name ?? '' }}" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea name="description" id="description" class="form-control">{{ $product->description?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Product Category</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (isset($product) && $category->id == $product->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    <!-- product_variants -->
        <!-- <div class="form-group">
            <label for="price">Product Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">Số lượng</label>
            <input type="text" name="quantity" id="quantity" class="form-control">
        </div>
        <div class="form-group">
            <label for="color">Màu sắc</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>
        <div class="form-group">
            <label for="ram">Ram</label>
            <input type="text" name="ram" id="ram" class="form-control">
        </div>
        <div class="form-group">
            <label for="storage">Bộ nhớ trong</label>
            <input type="text" name="storage" id="storage" class="form-control">
        </div> -->

        <!-- images -->

        <div class="form-group">
            <label for="image">Product Primary Image</label>
            <input type="file" name="imageprimary" id="imageprimary" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="images[]" id="image" class="form-control" multiple="">
        </div> 


        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

@endsection
