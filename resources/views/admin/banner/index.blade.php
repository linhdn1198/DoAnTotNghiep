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
                    <h1 class="m-0 text-dark">{{ __('admin.management_banner') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('banners.index') }}">{{ __('admin.management_banner') }}</a></li>
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
                        <div class="card-header">
                            <h3 class="card-title">{{ __('admin.show_banner') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <a class="btn btn-outline-warning my-3" href="{{ route('banners.edit', $banner->id) }}">
                                        <i class="fas fa-edit"></i>&nbsp;&nbsp;{{ __('admin.btn_edit') }}
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{ __('admin.title') }}: </label>
                                <p>{{ $banner->title }}</p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('admin.content') }}: </label>
                                <p>{{ $banner->content }}</p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('admin.images') }}: </label>
                                <p>
                                    <img style="with:600px; height:400px" class="rounded" src="{{ Storage::url($banner->image) }}">
                                </p>
                            </div>
                        </div>
                        <!-- /.card-body -->
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
