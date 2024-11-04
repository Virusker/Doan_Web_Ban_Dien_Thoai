@extends('layout_admin/layout')

@section('title', 'admin products')

@section('content')

<h2>admin products</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">tên sản phẩm</th>
              <th scope="col">giá</th>
              <th scope="col">mô tả</th>
              <th scope="col">hình ảnh</th>
              <th scope="col"><a class="btn btn-primary" href="/admin/products/add">Thêm</a></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->description }}</td>
              <td>x</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a class="btn btn-warning" href="/admin/products/{{ $product->id }}">sửa</a>
                    <a class="btn btn-danger" href="/admin/products/{{ $product->id }}/delete">xóa</a>
                </div>
              </td>

            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>

    
@endsection
