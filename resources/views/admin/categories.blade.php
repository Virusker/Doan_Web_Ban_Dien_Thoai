@extends('layout_admin/layout')

@section('title', 'Categories')

@section('content')

<h2>admin catogeries</h2>
<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">tên hãng</th>
          <th scope="col"><a class="btn btn-primary" href="/admin/add_category">Thêm</a></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-warning" href="/admin/update_category/{{ $category->id }}">sửa</a>
              <a class="btn btn-danger" href="/admin/del_category/{{ $category->id }}">xóa</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection