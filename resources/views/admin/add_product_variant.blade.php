@extends('layout_admin/layout')

@section('title', 'admin - Add products variant')



@section('content')

<h2>admin add products variant</h2>

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

<form action="/admin/add_product_variant" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>

        <select name="product_id" id="product_id" class="form-control">
            @foreach ($products as $product)
            <option value="{{ $product->id }}" {{ $product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- product_variants -->
    <div class="form-group">
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
    </div>

    <!-- images -->
    <!-- <div class="form-group">
        <label for="image">ảnh chính</label>
        <input type="file" name="imageprimary" id="imageprimary" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" name="image[]" id="image" class="form-control" multiple="">
    </div> -->

    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@endsection