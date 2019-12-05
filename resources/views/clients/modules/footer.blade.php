<footer class="footer_part">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>{{ __('home.category') }}</h4>
                    <ul class="list-unstyled">
                        @foreach ($productCategories as $productCategory)
                            <li><a href="{{ route('display_product', $productCategory->slug) }}">{{ $productCategory->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>{{ __('home.store') }}</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">{{ __('home.home') }}</a></li>
                        <li><a href="{{ route('post') }}">{{ __('home.blog') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('home.contact') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('home.about') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>{{ __('home.address') }}</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">{{ $contact->address }}</a></li>
                        <li><a href="#">{{ $contact->phone }}</a></li>
                        <li><span>{{ $contact->email }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_text">
                    <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    {{ __('home.copyright') }} &copy;<script>document.write(new Date().getFullYear());</script> {{ __('home.all_right') }}
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                </div>
            </div>
        </div>
    </div>
</footer>
