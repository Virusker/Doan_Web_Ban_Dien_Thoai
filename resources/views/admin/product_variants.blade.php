@extends('layout_admin/layout')

@section('title', 'admin products variants')

@section('content')

<h2>admin products variants</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">tên sản phẩm</th>
              <th scope="col">giá</th>
              <th scope="col">màu sắc</th>
              <th scope="col">ram</th>
              <th scope="col">bộ nhớ trong</th>
              <th scope="col"><a class="btn btn-primary" href="/admin/add_product_variant">Thêm</a></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($product_variants as $pv)
            <tr>
                <td>{{ $pv->id }}</td>
                <td>{{ $pv->product->name }}</td>
                <td>{{ $pv->price }}</td>
                <td>{{ $pv->color }}</td>
                <td>{{ $pv->ram }}</td>
                <td>{{ $pv->storage }}</td>

              <td>
                <div class="btn-group" role="group">
                  
                  <a class="btn btn-warning" href="/admin/update_product_variant/{{ $pv->id }}">sửa</a>
                  <a class="btn btn-danger" href="/admin/del_product_variant/{{ $pv->id }}">xóa</a>
                </div>
              </td>

            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>

@endsection      