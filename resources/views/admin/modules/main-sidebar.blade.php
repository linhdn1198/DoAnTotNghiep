<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ __('admin.admin')}}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('users.edit', Auth::user()->id ) }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview @if (request()->is('admin/dashboard*')) menu-open @endif">
                    <a href="{{ route('dashboard.index') }}" class="nav-link @if (request()->is('admin/dashboard*')) active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>  
                        <p>
                            {{ __('admin.dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview @if (request()->is('admin/orders*', 'admin/product-category*', 'admin/products*', 'admin/comment-product*')) menu-open @endif">
                    <a href="#" class="nav-link @if (request()->is('admin/orders*', 'admin/product-category*', 'admin/products*', 'admin/comment-product*')) active @endif">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            {{ __('admin.management_product') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('orders.index') }}"
                                class="nav-link @if (request()->is('admin/orders*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.order') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product-category.index') }}"
                                class="nav-link @if (request()->is('admin/product-category*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.product_category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.index') }}"
                                class="nav-link @if (request()->is('admin/products*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.product') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('comment-product.index') }}"
                                class="nav-link @if (request()->is('admin/comment-product*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.comment_product') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @if (request()->is('admin/post-category*', 'admin/posts*', 'admin/comment-post*', 'admin/tags*')) menu-open @endif">
                    <a href="#" class="nav-link @if (request()->is('admin/post-category*', 'admin/posts*', 'admin/comment-post*', 'admin/tags*')) active @endif">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            {{ __('admin.management_post') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('post-category.index') }}"
                                class="nav-link @if (request()->is('admin/post-category*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.post_category') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('posts.index') }}"
                                class="nav-link @if (request()->is('admin/posts*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.post') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tags.index') }}"
                                class="nav-link @if (request()->is('admin/tags*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.tag') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('comment-post.index') }}"
                                class="nav-link @if (request()->is('admin/comment-post*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.comment_post') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview @if (request()->is('admin/abouts*', 'admin/contacts*', 'admin/banners*', 'admin/users*')) menu-open @endif">
                    <a href="#" class="nav-link @if (request()->is('admin/abouts*', 'admin/contacts*', 'admin/banners*', 'admin/users*')) active @endif">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            {{ __('admin.management_system') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('banners.index') }}"
                                class="nav-link @if (request()->is('admin/banners*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.banner') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('abouts.index') }}"
                                class="nav-link @if (request()->is('admin/abouts*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.about') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contacts.index') }}"
                                class="nav-link @if (request()->is('admin/contacts*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.contact') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}"
                                class="nav-link @if (request()->is('admin/users*')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('admin.user') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
