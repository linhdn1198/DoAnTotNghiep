@extends('clients.master')

@section('style')
    <style>
        .is-error {
            border-color: #dc3545 !important;
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
                        <p>{{ __('home.home') }} / {{ __('home.cart_list') }}</p>
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
            @if (Cart::isEmpty())
            <h3 class="title text-center">{{ __('home.message_cart_empty') }}</h3>
            <p class="text-center"><a class="btn_1 checkout_btn_1" href="/">{{ __('home.home') }}</a></p>
            @else
            <form action="{{ route('update_cart') }}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('home.product') }}</th>
                                <th scope="col">{{ __('home.price') }}</th>
                                <th scope="col">{{ __('home.quantity') }}</th>
                                <th scope="col">{{ __('home.total') }}</th>
                                <th scope="col">{{ __('home.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::getContent() as $index => $item)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{ Storage::url($item->attributes['image']) }}"
                                                alt="{{ $item->name }}" />
                                        </div>
                                        <div class="media-body">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ formatCurrency($item->price) }} {{ __('home.vnd') }}</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="ids[]" value="{{ $item->id }}" hidden>
                                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                        <input class="input-number @error('quantities.*') is-error @enderror" type="text" name="quantities[]" 
                                            value="{{ $item->quantity }}" min="1" max="99">
                                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ formatCurrency($item->price * $item->quantity) }} {{ __('home.vnd') }}</h5>
                                </td>
                                <td>
                                    <a href="{{ route('remove_item_cart', $item->id) }}"
                                        class="genric-btn danger">{{ __('home.remove') }}</a>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="bottom_button">
                                <td colspan="5">
                                    <button class="btn_1" type="submit">{{ __('home.update_cart') }}</button>
                                </td>
                            </tr>
                        </form>
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            @if (!Auth::check())
                                <tr>
                                    <td colspan="5">
                                        <h3>{{ __('home.customer_info') }} {{ Auth::user() }}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="{{ __('home.name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" 
                                            name="email" placeholder="{{ __('home.email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" placeholder="{{ __('home.phone') }}">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12 form-group">
                                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" placeholder="{{ __('home.address') }}">
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>                
                            @endif
                            <tr class="bottom_button">
                                <td colspan="5">
                                    <div class="checkout_btn_inner float-right">
                                        <a class="btn_1"
                                            href="{{ route('home') }}">{{ __('home.continue_shopping') }}</a>
                                        <button class="btn_1 checkout_btn_1" type="submit">{{ __('home.proceed_to_checkout') }}</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            @endif
        </div>
</section>
<!--================End Cart Area =================-->
@endsection
@section('script')

@endsection
