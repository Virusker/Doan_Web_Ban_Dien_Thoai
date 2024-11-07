@extends('layout_admin/layout')

@section('title', 'admin - update catogery')



@section('content')

<h2>admin update catogery</h2>

<form action="/admin/update_category" method="post">
    @csrf
    <div class="form-group">
        <label for="id">id</label>
        <input type="text" name="category_id" value="{{ $category->id }}" class="form-control" readonly>
        <label for="name">Category Name</label>
        <input value="{{ $category->name?? '' }}" type="text" name="name" id="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>



@endsection