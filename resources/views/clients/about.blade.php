@extends('clients.master')

@section('style')
<style>
.section_padding {
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
                        <p>{{ __('home.home') }} / {{ __('home.about') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
        
<!-- about part here -->
<section class="about_part section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single_about_part">
                    <h4>{{ $about->title }}</h4>
                    <p>{{ $about->content }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end -->
@endsection
@section('script')
    
@endsection
