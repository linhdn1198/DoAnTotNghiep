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
                        <p>{{ __('home.home') }}/{{ __('home.simple_product') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Single Product Area =================-->
<div class="product_image_area section_padding">
    <div class="container">
        <div class="row s_product_inner">
        <div class="col-lg-5">
            <div class="product_slider_img">
            <div id="vertical">
                    <div data-thumb="/client/img/product_details/prodect_details_1.png">
                        <img src="/client/img/product_details/prodect_details_1.png" />
                    </div>
                    <div data-thumb="/client/img/product_details/prodect_details_2.png">
                        <img src="/client/img/product_details/prodect_details_2.png"/>
                    </div>
                    <div data-thumb="/client/img/product_details/prodect_details_3.png">
                        <img src="/client/img/product_details/prodect_details_3.png" />
                    </div>
                    <div data-thumb="/client/img/product_details/prodect_details_4.png">
                        <img src="/client/img/product_details/prodect_details_4.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
            <h3>{{ $product->name }}</h3>
            <h2>{{ $product->price }}</h2>
            <ul class="list">
                <li>
                <a class="active" href="{{ route('display', $product->productCategory->slug) }}">
                    <span>{{ __('home.category') }}</span>{{ $product->productCategory->name }}</a>
                </li>
            </ul>
            <p>
                {{ $product->description }}
            </p>
            <div class="card_area">
                <div class="product_count d-inline-block">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
                </div>
                <div class="add_to_cart">
                    <a href="#" class="btn_3">{{ __('home.add_to_cart') }}</a>
                </div>
                <div class="social_icon">
                    <a href="#" class="fb"><i class="ti-facebook"></i></a>
                    <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                    <a href="#" class="li"><i class="ti-linkedin"></i></a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">{{ __('home.description') }}</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
          aria-selected="false">{{ __('home.comments') }}</a>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
        <p>
            {{ $product->description }}
        </p>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row">
          <div class="col-lg-6">
            <div class="comment_list">
                @foreach ($product->comments as $comment)
                    <div class="review_item">
                        <div class="media">
                          <div class="d-flex">
                            <img src="/client/img/product/single-product/review-1.png" alt="" />
                          </div>
                          <div class="media-body">
                            <h4>{{ $comment->user->name }}</h4>
                            <h5>{{ $comment->created_at->diffForHumans() }}</h5>
                          </div>
                        </div>
                        <p>
                            {{ $comment->content }}
                        </p>
                    </div>
                @endforeach
            </div>
          </div>
          <div class="col-lg-6">
            <div class="review_box">
              <h4>{{ __('home.post_a_comment') }}</h4>
              <form class="row contact_form" action="#" method="post" id="contactForm"
                novalidate="novalidate">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="{{ __('home.message') }}"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="btn_3">
                        {{ __('home.submit') }}
                    </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Product Description Area =================-->

<!-- product_list part start-->
<section class="product_list best_seller padding_bottom">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="section_tittle text-center">
          <h2>{{ __('home.product_relation') }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
        @foreach ($productRelation as $product)
            <div class="col-lg-3 col-sm-6">
                <div class="single_category_product">
                    <div class="single_category_img">
                        <img src="/client/img/category/category_2.png" alt="">
                        <div class="category_social_icon">
                            <ul>
                                <li><a href="#"><i class="ti-heart"></i></a></li>
                                <li><a href="#"><i class="ti-bag"></i></a></li>
                            </ul>
                        </div>
                        <div class="category_product_text">
                            <a href="single-product.html"><h5>{{ $product->name }}</h5></a>
                            <p>{{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</section>
<!-- product_list part end-->
@endsection
@section('script')
    
@endsection
