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
                    <h1 class="m-0 text-dark">{{ __('admin.management_post') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">{{ __('admin.management_post') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('admin.btn_add') }}</li>
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
                        <form method="POST" action="{{ route('posts.update', $post->id) }}" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h3 class="card-title">{{ __('admin.edit_post') }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{ __('admin.category') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                                        </div>
                                    <select class="form-control 
                                        @error('post_category_id') is-invalid @enderror"
                                        name="post_category_id" 
                                        value="{{ old('post_category_id') }}">
                                        @foreach ($postCategories as $postCategory)
                                            <option @if ($post->post_category_id === $postCategory->id) selected @endif
                                            value="{{ $postCategory->id }}">{{ $postCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('post_category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('admin.title') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-edit"></i></span>
                                        </div>
                                        <input name="title" type="text" value="{{ $post->title }}"
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
                                    <textarea id="content" name="content"
                                        class="form-control @error('content') is-invalid @enderror">{{ $post->content }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('admin.tag') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                                        </div>
                                        <select class="select2bs4 form-control @error('tag') is-invalid @enderror"
                                            name="tags[]" multiple data-placeholder="{{ __('admin.select_tag') }}">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}"
                                                    @foreach ($post->tags as $item)
                                                        @if ($tag->id === $item->id)
                                                            selected
                                                        @endif
                                                    @endforeach    
                                                >{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('admin.image') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                                        </div>
                                        <input value="{{ Storage::url($post->image) }}" class="form-control @error('image') is-invalid @enderror" type="file" name="image" value="">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group" id="list-image">
                                    <img src="{{ Storage::url($post->image) }}" class="rounded" style="with:600px; height: 450px">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="modal-footer justify-content-between">
                                <a href="{{ route('posts.index') }}" class="btn btn-outline-warning"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp; {{ __('admin.back') }}</a>
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
        $('#content').summernote({
            height: 180
        });

        $("[name='image']").change(function() {
            $('#list-image').html('');
            let images = this.files;
            let reader = new FileReader();
            reader.onload = function(event) {
                $($.parseHTML('<img>'))
                    .attr('src', event.target.result)
                    .attr('style', 'with:600px; height: 450px')
                    .attr('class', "rounded")
                    .appendTo('#list-image');
            }
            reader.readAsDataURL(images[0]);
        });

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>
@endsection
