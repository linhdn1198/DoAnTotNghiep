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
                            <p>{{ __('home.home') }} / {{ __('home.comfirmation') }}</p>
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
              <span>{{ __('home.thank_you') }}</span>
            </div>
          </div>
          <div class="col-lg-6 col-lx-4">
            <div class="single_confirmation_details">
              <h4>{{ __('home.order_info') }}</h4>
              <ul>
                <li>
                  <p>{{ __('home.order_number') }}</p><span>: {{ $orderDetails->id }}</span>
                </li>
                <li>
                  <p>{{ __('home.date') }}</p><span>: {{ $orderDetails->created_at }}</span>
                </li>
                <li>
                  <p>{{ __('home.total') }}</p><span>: {{ $orderDetails->total }}</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-lx-4">
            <div class="single_confirmation_details">
              <h4>{{ __('home.shipping_address') }}</h4>
              <ul>
                <li>
                  <p>{{ __('home.address') }}</p><span>: {{ $orderDetails->user->address }}</span>
                </li>
                <li>
                  <p>{{ __('home.name') }}</p><span>: {{ $orderDetails->user->name }}</span>
                </li>
                <li>
                  <p>{{ __('home.phone') }}</p><span>: {{ $orderDetails->user->phone }}</span>
                </li>
              </ul>
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
                      <th>x{{ $orderDetail->qty }}</th>
                      <th>{{ $orderDetail->price }}</th>
                      <th><span>{{ $orderDetail->price * $orderDetail->qty }}</span></th>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col" colspan="4"></th>
                    <th scope="col">{{ __('home.total') }}: {{ $orderDetails->total }}</th>
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
