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
                                <h5 class="text-white">LD Store</h5>
                                <h2 class="text-white">Smart watch</h2>
                                <a href="#products" class="btn_1">shop now</a>
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

                    {{-- <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Product filters</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <p>Brands</p>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Asus</a>
                                </li>
                                <li class="active">
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Gionee</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Micromax</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Samsung</a>
                                </li>
                            </ul>
                            <ul class="list">
                                <p>color</p>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Black</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Black Leather</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Black with red</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Gold</a>
                                </li>
                                <li>
                                    <input type="radio" aria-label="Radio button for following text input">
                                    <a href="#">Spacegrey</a>
                                </li>
                            </ul>
                        </div>
                    </aside> --}}

                    {{-- <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                        </div>
                        <div class="widgets_inner">
                            <div class="range_item">
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex align-items-center">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" v-model="from_amount" id="from_amount" readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" v-model="to_amount" id="to_amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside> --}}
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    {{-- <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu product_bar_item">
                                <h2>
                                    @if(empty($category))
                                        {{ __('home.all') }}
                                        ({{ count($products) }})
                                    @else
                                        {{ $category->name }}
                                        ({{ count($category->products) }})
                                    @endif
                                </h2>
                            </div>
                            <div class="product_top_bar_iner product_bar_item d-flex">
                                <div class="product_bar_single">
                                    <select class="wide">
                                        <option data-display="Default sorting">Default sorting</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3">Potato</option>
                                    </select>
                                </div>
                                <div class="product_bar_single">
                                    <select>
                                        <option data-display="Show 12">Show 12</option>
                                        <option value="1">Show 20</option>
                                        <option value="2">Show 30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($products as $product)         
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <img src="/client/img/product/apple-watch-1.jpg" alt="{{ $product->name }}">
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
