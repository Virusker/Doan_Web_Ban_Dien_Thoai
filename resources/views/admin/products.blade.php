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
              <th scope="col">mô tả</th>
              <th scope="col">hãng</th>
              <th scope="col"><a class="btn btn-primary" href="/admin/add_product">Thêm</a></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->category->name }}</td>

              <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a class="btn btn-primary" href="/admin/add_product_variant/{{ $product->id }}">thêm biến thể</a>
                  <a class="btn btn-warning" href="/admin/update_product/{{ $product->id }}">sửa</a>
                  <a class="btn btn-danger" href="/admin/del_product/{{ $product->id }}">xóa</a>
                </div>
              </td>

            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>

    
@endsection
