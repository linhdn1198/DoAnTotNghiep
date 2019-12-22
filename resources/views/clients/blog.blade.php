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
                                <p>{{ __('home.home') }} / {{ __('home.blog') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
    
        <!--================Blog Area =================-->
        <section class="blog_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($posts as $post)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0" src="/client/img/blog/single_blog_1.png" alt="{{ $post->title }}">
                                        <a href="{{ route('simple_blog', $post->slug) }}" class="blog_item_date">
                                            <h3>{{ formatDay($post->created_at) }}</h3>
                                            <p>{{ formatMonthYear($post->created_at) }}</p>
                                        </a>
                                    </div>
        
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ route('simple_blog', $post->slug) }}">
                                            <h2>{{ $post->title }}</h2>
                                        </a>
                                        <p>
                                            {{ $post->content }}
                                        </p>
                                        <ul class="blog-info-link">
                                            <li><a href="#"><i class="far fa-user"></i> {{ $post->user->name }}</a></li>
                                            <li><a href="#"><i class="far fa-comments"></i> {{ count($post->comments) }} {{ __('home.comments') }}</a></li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                                {{ $posts->links() }}
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="{{ route('post_search') }}" method="get">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input name="search" type="text" class="form-control" placeholder='{{ __('home.search') }}'
                                                onfocus="this.placeholder = '{{ __('home.search') }}'"
                                                onblur="this.placeholder = '{{ __('home.search') }}'">
                                            <div class="input-group-append">
                                                <button class="btn" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                        type="submit">{{ __('home.search_button') }}</button>
                                </form>
                            </aside>
    
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">{{ __('home.category_post') }}</h4>
                                <ul class="list cat-list">
                                    @foreach ($postCategories as $postCategory)
                                        <li>
                                            <a href="{{ route('display_post', $postCategory->slug) }}" class="d-flex">
                                                <p>{{ $postCategory->name }}</p>
                                                <p>({{ count($postCategory->posts) }})</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
    
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">{{ __('home.recent_post') }}</h3>
                                @foreach ($postRecentes as $postRecent)
                                    <div class="media post_item">
                                        <img src="/client/img/post/post_1.png" alt="post">
                                        <div class="media-body">
                                            <a href="{{ route('simple_blog', $postRecent->slug) }}">
                                                <h3>{{ $postRecent->title }}</h3>
                                            </a>
                                            <p>{{ $postRecent->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">{{ __('home.tag') }}</h4>
                                <ul class="list">
                                    @foreach ($tags as $tag)
                                        <li>
                                            <a href="{{ route('tag', $tag->name) }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
@endsection
@section('script')
    
@endsection
