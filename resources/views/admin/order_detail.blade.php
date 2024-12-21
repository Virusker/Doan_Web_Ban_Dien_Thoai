@extends('layout_admin/layout')

@section('title', 'Orders Detail')

@section('content')

<!-- order -->
<div class="order">
    <h3>Thông tin đơn hàng</h3>
    <div class="order-info">
        <div class="order-info-item">
            <span class="order-info-label">Tên khách hàng:</span>
            <span class="order-info-value">{{ $order->customer_name }}</span>
        </div>
        <div class="order-info-item">
            <span class="order-info-label">Địa chỉ:</span>
            <span class="order-info-value">{{ $order->shipping_address }}</span>
        </div>
        <div class="order-info-item">
            <span class="order-info-label">Số điện thoại:</span>
            <span class="order-info-value">{{ $order->customer_phone }}</span>
        </div>
        <div class="order-info-item">
            <span class="order-info-label">Ngày tạo:</span>
            <span class="order-info-value">{{ $order->created_at }}</span>
        </div>
        <div class="order-info-item">
            <span class="order-info-label">Phương thức thanh toán:</span>
            <span class="order-info-value">{{ $order->payment_method }}</span>
        </div>
        <div class="order-info-item">
            <span class="order-info-label">Trạng thái:</span>
            <span class="order-info-value">{{ $order->status == 1 ? "Đang tiến hành" : "Đã hoàn thành" }}</span>
        </div>
    </div>
</div>
<br><br>


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
          <th scope="col">số lượng</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order_details as $od)
        <tr>
            <td>{{ $od->id }}</td>
            <td>{{ $od->product_name }}</td>
            <td>{{ $od->order_price }}</td>
            <td>{{ $od->color }}</td>
            <td>{{ $od->ram }}</td>
            <td>{{ $od->storage }}</td>
            <td>{{ $od->order_quantity }}</td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>

@endsection