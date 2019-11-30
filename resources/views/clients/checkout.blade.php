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
            <p>Home / checkout</p>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!-- breadcrumb start-->
<!--================Checkout Area =================-->
<section class="checkout_area section_padding">
    <div class="container">
        <div class="returning_customer">
        <div class="check_title">
            <h2>
            Returning Customer?
            <a href="#">Click here to login</a>
            </h2>
        </div>
        <p>
            If you have shopped with us before, please enter your details in the
            boxes below. If you are a new customer, please proceed to the
            Billing & Shipping section.
        </p>
        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control" id="name" name="name" value=" " />
            <span class="placeholder" data-placeholder="Username or Email"></span>
            </div>
            <div class="col-md-6 form-group p_star">
            <input type="password" class="form-control" id="password" name="password" value="" />
            <span class="placeholder" data-placeholder="Password"></span>
            </div>
            <div class="col-md-12 form-group">
            <button type="submit" value="submit" class="btn_3">
                log in
            </button>
            <div class="creat_account">
                <input type="checkbox" id="f-option" name="selector" />
                <label for="f-option">Remember me</label>
            </div>
            <a class="lost_pass" href="#">Lost your password?</a>
            </div>
        </form>
    </div>
</section>
<!--================End Checkout Area =================-->

@endsection
@section('script')
    
@endsection
