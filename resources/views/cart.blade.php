@extends('layout/layout')

@section('title', 'Giỏ hàng')

@section('js')
    @vite('resources/js/product.js')
@endsection


@section('content')
    <div class="cart">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carts as $c)
                <tr class="cart-item-{{ $c->id }}">
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->product_name }} màu {{ $c->color }} {{ $c->ram }}GB/{{ $c->storage }}GB</td>
                    <td><span class="product-price-{{ $c->id }}" data-price="{{ $c->price }}">{{ number_format($c->price, 0, ',', '.') }} ₫</span></td>
                    <td>
                        <button data-id='{{ $c->id }}' class="btn minus">-</button>
                        <input data-oq="{{ $c->cart_quantity }}" data-id='{{ $c->id }}' style="width: 55px;" type="number" value="{{ $c->cart_quantity }}" min="1" class="quantity quantity-{{ $c->id }}">
                        <button data-id='{{ $c->id }}' class="btn plus">+</button>
                    </td>
                    <td><span class="total-price total-price-{{ $c->id }}">{{ number_format($c->price * $c->cart_quantity, 0, ',', '.') }} ₫</span></td>
                    <td><button data-id='{{ $c->id }}' class="delete-btn">Xóa</button></td>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="total-label">TỔNG TIỀN:</td>
                    <td colspan="2" class="total-price-all"></td>
                </tr>
             <tr>
                <td colspan="4"></td>
                <td colspan="2" class="action-buttons">
                    <div class="action-btns-container">
                        <a href="/checkout" class="checkout-btn">Thanh Toán</a>
                        <!-- <button class="clear-btn">Xóa hết</button> -->
                    </div>
                </td>
            </tr>
            </tfoot>

        </table>
    </div>

@endsection
