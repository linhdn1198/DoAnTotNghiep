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
                    <h1 class="m-0 text-dark">{{ __('admin.management_about') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('abouts.index') }}">{{ __('admin.management_about') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('admin.btn_edit') }}</li>
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
                        <form method="POST" action="{{ route('abouts.update', $about->id) }}" role="form">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h3 class="card-title">{{ __('admin.edit_about') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{ __('admin.title') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-edit"></i></span>
                                        </div>
                                        <input name="title" type="text" value="{{ $about->title }}"
                                            class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('admin.content') }}</label>
                                    <textarea name="content" rows="4"
                                        class="form-control @error('content') is-invalid @enderror">{{ $about->content }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <a href="{{ route('abouts.index') }}" class="btn btn-outline-warning"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp; {{ __('admin.back') }}</a>
                                <button type="submit" class="btn btn-outline-primary"><i class="fas fa-save"></i>&nbsp;&nbsp; {{ __('admin.save') }}</button>
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
<script>
    $(document).ready(function () {
        $("[name='image']").change(function() {
            $('#list-image').html('');
            let images = this.files;
            let reader = new FileReader();
            reader.onload = function(event) {
                $($.parseHTML('<img>'))
                    .attr('src', event.target.result)
                    .attr('style', 'with:600px; height:400px')
                    .attr('class', "rounded")
                    .appendTo('#list-image');
            }
            reader.readAsDataURL(images[0]);
        });
    });
</script>
@endsection
