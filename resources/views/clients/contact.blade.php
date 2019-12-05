@extends('clients.master')

@section('style')
<style>
.padding_top {
    padding: 50px 0px !important;
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
                        <p>{{ __('home.home') }} / {{ __('home.contact') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section padding_top">
    <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7760289010344!2d105.7830255659975!3d21.041645819585447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4a59dff9bf%3A0xef27e69de611d410!2sLD%20Store%20-%20Smart%20Watches!5e0!3m2!1sen!2s!4v1575552954985!5m2!1sen!2s" width="100%" height="400px" position: absolute frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>


    <div class="row">
        <div class="col-lg-4">
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
            <h3>{{ __('home.address') }}</h3>
            <p>{{ $contact->address }}</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
            <h3>{{ __('home.phone') }}</h3>
            <p>{{ $contact->phone }}</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
            <h3>{{ __('home.email') }}</h3>
            <p>{{ $contact->email }}</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection
@section('script')
    
@endsection
