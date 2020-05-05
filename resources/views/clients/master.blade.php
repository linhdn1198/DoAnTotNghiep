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
    <link rel="stylesheet" href="{{ mix('css/client.css') }}">
    @yield('style')
</head>
<body>
    <!--::header part start::-->
    @include('clients.modules.header')
    <!-- Header part end-->
    @yield('content')
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
    <script src="/client/js/jquery.ajaxchimp.min.js"></script>
    <script src="/client/js/jquery.form.js"></script>
    <script src="/client/js/jquery.validate.min.js"></script>
    <script src="/client/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="/client/js/custom.js"></script>
    <script src="/js/print.js"></script>
    <script src="{{ mix('js/client.js') }}"></script>
    <script>
        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}")
        @endif

		@if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>
    @yield('script')
</body>
</html>
