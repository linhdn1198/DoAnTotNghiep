@extends('clients.master')

@section('style')
<style>
.btn_1 {
    background-color: #f44a40;
}
.price_value input {
    max-width: 65px;
}
</style>
@endsection
@section('content')
<!-- banner part start-->
<section class="banner_part" style="background-image:url({{ Storage::url($banner->image) }})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_slider">
                    <div class="single_banner_slider">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5 class="text-white">{{ __('admin.name_store') }}</h5>
                                <h2 class="text-white">{{ __('home.smart_watch') }}</h2>
                                <a href="#products" class="btn_1">{{ __('home.shop_now') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->
<!--================Category Product Area =================-->
<section class="cat_product_area section_padding border_top" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>{{ __('home.category') }}</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="{{ route('home') }}">{{ __('home.all') }}</a>
                                </li>  
                                @foreach ($productCategories as $productCategory)
                                    <li>
                                        <a href="{{ route('display_product', $productCategory->slug) }}">{{ $productCategory->name }}</a>
                                    </li>  
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    @foreach ($products as $product)         
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="{{ Storage::url(firstImageWithUrlJson($product->image)) }}" alt="{{ $product->name }}" style="with:250px; hieght: 270px">
                                    <div class="category_social_icon">
                                        <ul>
                                            <li><a href="{{ route('add_to_cart_default', $product->slug) }}"><i class="ti-bag"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="{{ route('simple_product', $product->slug) }}"><h5>{{ $product->name }}</h5></a>
                                        <p>{{ formatCurrency($product->price) }} {{ __('home.vnd') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 text-center">
                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->
@endsection
@section('script')
@endsection
