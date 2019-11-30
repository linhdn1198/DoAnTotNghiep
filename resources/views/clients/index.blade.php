@extends('clients.master')

@section('style')
    
@endsection
@section('content')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_slider">
                    <div class="single_banner_slider">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>Winter Fasion</h5>
                                <h1>Fashion Collection 2019</h1>
                                <a href="#" class="btn_1">shop now</a>
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
<section class="cat_product_area section_padding border_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="#">Fruits and Vegetables</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#Electronics" class=" d-flex justify-content-between">
                                        Electronics
                                        <div class="right ti-plus"></div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#Electronics">Home Appliances</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Smartphones</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Kitchen Appliances</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Computer Accessories</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#Electronics">Appliances</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cooking</a>
                                </li>
                                <li>
                                    <a href="#">Beverages</a>
                                </li>
                                <li>
                                    <a href="#">Home and Cleaning</a>
                                </li>
                            </ul>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
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
                    </aside>

                    <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                        </div>
                        <div class="widgets_inner">
                            <div class="range_item">
                                <!-- <div id="slider-range"></div> -->
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex align-items-center">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" id="amount" readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" id="amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu product_bar_item">
                                <h2>Womans (12)</h2>
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
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_1.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
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
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_3.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_4.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_5.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_6.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><a href="single-product.html"><h5>Long Sleeve TShirt</h5></a></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_7.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_8.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_9.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_10.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_11.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="/client/img/category/category_12.png" alt="">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="single-product.html"><h5>Long Sleeve TShirt</h5></a>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn_2">More Items</a>
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
