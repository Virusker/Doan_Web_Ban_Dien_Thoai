@extends('layout/layout')

@section('title', 'Thanh toán')

@section('js')
    @vite('resources/js/product.js')
@endsection

@section('content')


<main>
    <div class="py-5 text-center">
      
      <h2>Thanh toán</h2>
      
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Giỏ hàng</span>
          <span class="badge bg-primary rounded-pill">{{ $cart_count }}</span>
        </h4>
        <ul class="list-group mb-3">
            @foreach($carts as $c)
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">{{ $c->product_name }} &nbsp;&nbsp;&nbsp;&nbsp; x {{ $c->cart_quantity }}</h6>
              <small class="text-body-secondary">Màu {{ $c->color }} {{ $c->ram }}GB/{{ $c->storage }}GB</small>
            </div>
            <span class="text-body-secondary total-price">{{ number_format($c->price * $c->cart_quantity, 0, ',', '.') }} ₫</span>
          </li>
            @endforeach

          <li class="list-group-item d-flex justify-content-between">
            <span>Tổng tiền</span>
            <strong class="total-price-all"></strong>
          </li>
        </ul>
 
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Địa chỉ thanh toán</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Họ Tên</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Vui lòng điền họ và tên.
              </div>
            </div>

            <div class="col-sm-12">
              <label for="lastName" class="form-label">Số điện thoại</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Vui lòng điền số điện thoại.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Địa chỉ</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Vui lòng điền số điện thoại.
              </div>
            </div>

            <!-- <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div> -->
          </div>

          <!-- <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div> -->

          <hr class="my-4">

          <h4 class="mb-3">Phương thức thanh toán</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="COD" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="COD">Thanh toán trực tiếp(COD)</label>
            </div>
            <div class="form-check">
              <input id="Online" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="Online">Online</label>
            </div>
          </div>

          <!-- <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div> -->

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Thanh Toán</button>
          <br><br>
        </form>
      </div>
    </div>
  </main>


@endsection