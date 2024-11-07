@extends('layout_admin/layout')

@section('title', 'admin - Add catogery')



@section('content')

<h2>admin add catogery</h2>

<form action="/admin/add_category" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>



@endsection