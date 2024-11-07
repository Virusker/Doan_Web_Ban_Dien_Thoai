@extends('layout_admin/layout')

@section('title', 'admin - update product')


@section('content')

<h2>admin update product</h2>

<!-- error -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/admin/update_product" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="product_id" value="{{ $product->id }}" class="form-control" readonly>
        <label for="name">Product Name</label>
        <input value="{{ $product->name?? '' }}" type="text" name="name" id="name" class="form-control">
        <label for="description">Product Description</label>
        <input value="{{ $product->description?? '' }}" type="text" name="description" id="description" class="form-control">
        <label for="category_id">Category</label>
        <select name="category" id="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <!-- image -->
    <div class="form-group">
        <label for="image">Product Primary Image</label>
        <input type="file" name="imageprimary" id="imageprimary" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="images[]" id="image" class="form-control" multiple="">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endsection