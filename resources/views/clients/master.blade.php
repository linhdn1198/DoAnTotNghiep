<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ __('home.title') }}</title>
    <link rel="icon" href="/client/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/client/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/client/css/lightslider.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/client/css/all.css">
    <link rel="stylesheet" href="/client/css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/client/css/flaticon.css">
    <link rel="stylesheet" href="/client/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/client/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/client/css/slick.css">
    <!-- rangs CSS -->
    <link rel="stylesheet" href="/client/css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/client/css/style.css">
    @yield('style')
</head>
<body>
    <!--::header part start::-->
    @include('clients.modules.header')
    <!-- Header part end-->
    @yield('content')

    <!-- free shipping here -->
    {{-- <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_3.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_4.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- free shipping end -->

    <!--::footer_part start::-->
    @include('clients.modules.footer')
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="/client/js/jquery-1.12.1.min.js"></script>
    <!-- popper jclient/s -->
    <script src="/client/js/popper.min.js"></script>
    <!-- bootstraclient/p js -->
    <script src="/client/js/bootstrap.min.js"></script>
    <!-- easing jclient/s -->
    <script src="/client/js/jquery.magnific-popup.js"></script>
    <!-- swiper jclient/s -->
    <script src="/client/js/swiper.min.js"></script>
    <!-- swiper jclient/s -->
    <script src="/client/js/mixitup.min.js"></script>
    <!-- swiper js -->
    <script src="/client/js/lightslider.min.js"></script>
    <script src="/client/js/price_rangs.js"></script>
    <!-- particleclient/s js -->
    <script src="/client/js/owl.carousel.min.js"></script>
    <script src="/client/js/jquery.nice-select.min.js"></script>
    <!-- slick jsclient/ -->
    <script src="/client/js/slick.min.js"></script>
    <script src="/client/js/jquery.counterup.min.js"></script>
    <script src="/client/js/waypoints.min.js"></script>
    <script src="/client/js/contact.js"></script>
    <script src="/client/js/jquery.ajaxchimp.min.js"></script>
    <script src="/client/js/jquery.form.js"></script>
    <script src="/client/js/jquery.validate.min.js"></script>
    <script src="/client/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="/client/js/custom.js"></script>
    @yield('script')
</body>

</html>