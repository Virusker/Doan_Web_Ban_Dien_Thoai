@extends('layout_admin/layout')

@section('title', 'admin - update product variant')


@section('content')

<h2>admin update product variant</h2>

<form action="/admin/update_product_variant" method="post">
@csrf
    <div>
        <label for="id">ID</label>
        <input type="text" name="product_variant_id" value="{{ $product_variant->id }}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="name">Product Name</label>

        <select name="product_id" id="product_id" class="form-control">
            @foreach ($products as $product)
            <option value="{{ $product->id }}" {{ $product->id == $product_variant->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- product_variants -->
    <div class="form-group">
        <label for="price">Product Price</label>
        <input value="{{ $product_variant->price }}" type="text" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantity">Số lượng</label>
        <input value="{{ $product_variant->quantity }}" type="text" name="quantity" id="quantity" class="form-control">
    </div>
    <div class="form-group">
        <label for="color">Màu sắc</label>
        <input value="{{ $product_variant->color }}" type="text" name="color" id="color" class="form-control">
    </div>
    <div class="form-group">
        <label for="ram">Ram</label>
        <input value="{{ $product_variant->ram }}" type="text" name="ram" id="ram" class="form-control">
    </div>
    <div class="form-group">
        <label for="storage">Bộ nhớ trong</label>
        <input value="{{ $product_variant->storage }}" type="text" name="storage" id="storage" class="form-control">
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

    <button type="submit" class="btn btn-primary">Sửa</button>
</form>

@endsection