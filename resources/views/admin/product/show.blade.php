@extends('admin.master')

@section('style')

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ __('admin.show_product') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ __('admin.dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('admin.management_product') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('admin.btn_show') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form>
                            <div class="card-header">
                                <h3 class="card-title">{{ __('admin.btn_show') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{ __('product.category') }}</label>
                                    <p>{{ $product->productCategory->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('product.name') }}</label>
                                    <p>{{ $product->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('product.description') }}</label>
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('product.quantity') }}</label>
                                    <p>{{ $product->quantity }}</p>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('product.price') }}</label>
                                    <p>{{ formatCurrency($product->price) }}</p>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('product.images') }}</label>
                                    <p>
                                    @isset($product->image)
                                        @foreach (json_decode($product->image, true) as $image)
                                            <img style="with: 30px; height: 60px" class="rounded" src="{{ Storage::url($image['name']) }}">
                                        @endforeach
                                    @endisset
                                    </p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <a href="{{ route('products.index') }}" class="btn btn-outline-warning"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp; {{ __('admin.back') }}</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection

@section('script')
@endsection
