@extends('clients.master')

@section('style')
    
@endsection
@section('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>{{ __('home.home') }}/{{ __('home.cart_list') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Cart Area =================-->
<section class="cart_area section_padding">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach (Cart::getContent() as $item)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="/client/img/arrivel/arrivel_1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>{{ $item->name }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>{{ $item->price }}</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="{{ $item->quantity }}" min="1" max="99">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>{{ $item->price * $item->quantity }}</h5>
                </td>
              </tr>
            @endforeach
            <tr class="bottom_button">
              <td>
                <a class="btn_1" href="#">Update Cart</a>
              </td>
              <td></td>
              <td></td>
              <td>
                <div class="cupon_text float-right">
                  <a class="btn_1" href="#">Close Coupon</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="#">Continue Shopping</a>
          <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection
@section('script')
    
@endsection
