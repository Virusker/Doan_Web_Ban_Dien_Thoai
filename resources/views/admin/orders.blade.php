@extends('layout_admin/layout')

@section('title', 'Orders')

@section('content')

<h2>admin orders</h2>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">tên khách hàng</th>
          <th scope="col">địa chỉ</th>
          <th scope="col">số điện thoại</th>
          <th scope="col">ngày tạo</th>
          <th scope="col">Phương thức</th>
          <th scope="col">trạng thái</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <td>{{ $order->customer_name }}</td>
          <td>{{ $order->shipping_address }}</td>
          <td>{{ $order->customer_phone }}</td>
          <td>{{ $order->created_at }}</td>
          <td>{{ $order->payment_method }}</td>
          <td>{{ $order->status=1?"Đang tiến hành":'đã hoàn thành' }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-primary" href="/admin/order_detail/{{ $order->id }}">chi tiết</a>
              <!-- <a class="btn btn-warning" href="/admin/update_order/{{ $order->id }}">sửa</a>
              <a class="btn btn-danger" href="/admin/del_order/{{ $order->id }}">xóa</a> -->
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
@endsection