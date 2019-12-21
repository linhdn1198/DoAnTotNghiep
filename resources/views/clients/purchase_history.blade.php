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
                        <p>{{ __('home.home') }} / {{ __('home.purchase_history') }}</p>
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
      @if ($orders)
        <div class="table-responsive">
          <table class="table" id="purchase-history">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">{{ __('home.user') }}</th>
                <th scope="col">{{ __('home.status') }}</th>
                <th scope="col">{{ __('home.total') }}</th>
                <th scope="col">{{ __('home.date_of_purchase') }}</th>
                <th scope="col">{{ __('home.action') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $index => $order)
                <tr>
                  <td>
                    <h5>{{ $index + 1 }}</h5>
                  </td>
                  <td>
                    <h5>{{ $order->user->name }}</h5>
                  </td>
                  <td>
                    <h5>
                        <div class="primary-switch">
                            <input disabled type="checkbox" id="primary-switch" {{ $order->status === 1 ? 'checked' : '' }}>
                            <label for="primary-switch"></label>
                        </div>
                    </h5>
                  </td>
                  <td>
                    <h5>{{ $order->total }}</h5>
                  </td>
                  <td>
                    <h5>{{ $order->created_at }}</h5>
                  </td>
                  <td>
                    <a href="{{ route('purchase_history_detail', $order->id) }}" class="genric-btn info">{{ __('home.details') }}</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th scope="col" colspan="6">
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{-- {{ $orders->links() }} --}}
                        </nav>
                    </th>
                </tr>
              </tfoot>
          </table>
        </div>
      @else
        <h3 class="title">{{ __('home.message_purchase_history') }}</h3>
      @endif
    </div>
</section>
<!--================End Cart Area =================-->
@endsection
@section('script')
@endsection
