@extends('clients.master')

@section('style')
<style>
  .section_padding {
      padding: 140px 0px 140px 0px !important;
  }
</style>
@endsection
@section('content')
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <p>{{ __('home.home') }} / {{ __('home.purchase_history_detail') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
  
    <!--================ confirmation part start =================-->
    <section class="confirmation_part section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="confirmation_tittle">
              <span>{{ __('home.thank_you_purchase') }}</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="order_details_iner">
              <h3>{{ __('home.order_details') }}</h3>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" colspan="2">{{ __('home.product') }}</th>
                    <th scope="col">{{ __('home.quantity') }}</th>
                    <th scope="col">{{ __('home.price') }}</th>
                    <th scope="col">{{ __('home.total') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orderDetails->orderDetails as $orderDetail)
                    <tr>
                      <th colspan="2"><span>{{ $orderDetail->product->name }}</span></th>
                      <th>x{{ $orderDetail->quantity }}</th>
                      <th>{{ formatCurrency($orderDetail->price) }} {{ __('home.vnd') }}</th>
                      <th><span>{{ formatCurrency($orderDetail->price * $orderDetail->quantity) }} {{ __('home.vnd') }}</span></th>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col" colspan="4"></th>
                    <th scope="col">{{ __('home.total') }}: {{ formatCurrency($orderDetails->total) }} {{ __('home.vnd') }}</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ confirmation part end =================-->
@endsection
@section('script')
    
@endsection
