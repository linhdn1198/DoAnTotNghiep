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
                                <td>
                                    <button class="btn_1" type="submit">{{ __('home.update_cart') }}</button>
                                </td>
                                <td colspan="4">
                                    <div class="checkout_btn_inner float-right">
                                        <a class="btn_1"
                                            href="{{ route('home') }}">{{ __('home.continue_shopping') }}</a>
                                        <a class="btn_1 checkout_btn_1"
                                            href="{{ route('checkout') }}">{{ __('home.proceed_to_checkout') }}</a>
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
