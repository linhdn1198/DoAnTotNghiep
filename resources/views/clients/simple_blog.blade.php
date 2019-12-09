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
                        <p>Home / Single Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 posts-list">
            <div class="single-post">
                <div class="feature-img">
                    <img class="img-fluid" src="/client/img/blog/single_blog_1.png" alt="">
                </div>
                <div class="blog_details">
                    <h2>{{ $post->title }}</h2>
                    <ul class="blog-info-link mt-3 mb-4">
                    <li><a href="#"><i class="far fa-user"></i>
                        {{ $post->user->name }}
                    </a></li>
                    <li><a href="#"><i class="far fa-comments"></i> {{ count($post->comments) }} {{ __('home.comments') }}</a></li>
                    </ul>
                    <p class="excert">
                        {{ $post->content }}
                    </p>
                </div>
            </div>
            <div class="blog-author">
                <div class="media align-items-center">
                    <img src="/client/img/blog/author.png" alt="">
                    <div class="media-body">
                    <a href="#">
                        <h4>{{ $post->user->name }}</h4>
                    </a>
                    <p>
                        {{ $post->user->address }}
                    </p>
                    </div>
                </div>
            </div>
            <div id="comment">
            <div class="comments-area">
                <h4>@{{ comments.length }} {{ __('home.comments') }}</h4>
                <div class="comment-list" v-for="(comment, index) in commentss">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="/client/img/comment/comment_1.png" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                   @{{ comment.content }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                    <h5>
                                        <a href="#">@{{ comment.user.name }}</a>
                                    </h5>
                                    <p class="date">@{{ comment.created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="genric-btn primary-border circle" @click="loadMore()">{{ __('home.load_more') }}</button>
            </div>
            <div class="comment-form">
                <h4>{{ __('home.comments') }}</h4>
                <form class="form-contact comment_form" v-on:submit.prevent>
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="hidden" ref="post_id" value="{{ $post->id }}">
                            <textarea class="form-control w-100" :class="{ 'is-invalid' : isInvalid }" v-model="comment.content" ref="message" cols="30" rows="9"
                                placeholder="{{ __('home.message') }}"></textarea>
                            <span class="invalid-feedback" role="alert" v-if="isInvalid">
                                <strong>{{ __('home.message_require') }}</strong>
                            </span>
                        </div>
                    </div>
                    </div>
                    <div class="form-group mt-3">
                    <button class="btn_3 button-contactForm" @click="submitComment()">{{ __('home.submit') }}</button>
                    </div>
                </form>
            </div>
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
</section>
<!--================Blog Area end =================-->
@endsection
@section('script')
<script src="{{ mix('js/simple_post.js') }}"></script>
@endsection
