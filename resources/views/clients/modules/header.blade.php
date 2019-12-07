<header class="main_menu home_menu">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-11">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}"> <img src="/client/img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('home.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post') }}">{{ __('home.blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">{{ __('home.contact') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">{{ __('home.about') }}</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="language"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ __('home.language') }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="language">
                                    <a class="dropdown-item" href="{{ route('change_language', ['language' => 'vi']) }}"> {{ __('home.vi') }}</a>
                                    <a class="dropdown-item" href="{{ route('change_language', ['language' => 'en']) }}"> {{ __('home.en') }}</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                @if (Auth::user())
                                    <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                                @else
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('home.login') }}</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('home.register') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="{{ route('shopping_cart') }}">
                                <i class="ti-bag"></i>
                            </a>
                            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> --}}
                        </div>
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner" action="{{ route('search_product') }}" method="GET">
                <input type="text" class="form-control" id="search" name="search" placeholder="{{ __('home.search') }}">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
