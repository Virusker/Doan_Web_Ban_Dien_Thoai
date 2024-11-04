@extends('layout_admin/layout')

@section('title', 'admin - Add Products')

@section('content')
    <h2>admin add product</h2>

    <form action="/admin/products/add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="category">Product Category</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image[]" id="image" class="form-control" multiple="">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>

    
@endsection
