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
                    <h1 class="m-0 text-dark">{{ __('admin.management_post_category') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ __('admin.management_post_category') }}</li>
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
                            <h3 class="card-title">{{ __('admin.list_post_category') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <a class="btn btn-outline-success my-3" href="{{ route('post-category.create') }}">
                                        <i class="fas fa-plus"></i>&nbsp;&nbsp;{{ __('admin.btn_add') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="table-post-category" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr role="row">
                                                <th>{{ __('admin.stt') }}</th>
                                                <th>{{ __('admin.name') }}</th>
                                                <th>{{ __('admin.slug') }}</th>
                                                <th>{{ __('admin.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($postCategories as $index => $postCategory)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $postCategory->name }}</td>
                                                    <td>{{ $postCategory->slug }}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-outline-warning"
                                                            href="{{ route('post-category.edit', $postCategory->id) }}"><i class="fas fa-edit"></i></a>
                                                        <form class="d-inline" action="{{ route('post-category.destroy', $postCategory->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr role="row">
                                                <th>{{ __('product.name') }}</th>
                                                <th>{{ __('admin.name') }}</th>
                                                <th>{{ __('admin.slug') }}</th>
                                                <th>{{ __('admin.action') }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
<script>
    $(document).ready(function () {
        $('#table-post-category').DataTable({
            language: {
                search: "Tìm kiếm",
                lengthMenu: "Hiện _MENU_ bản ghi",
                info: "Hiển thị từ _START_ tới _END_ của _TOTAL_ bản ghi",
                infoEmpty: "Khi không có dữ liệu, Hiển thị 0 bản ghi trong 0 tổng cộng 0 ",
                zeroRecords: "Không có dữ liệu",
                emptyTable: "Không có dữ liệu",
                paginate: {
                    first: "Trang đầu",
                    previous: "Trang trước",
                    next: "Trang sau",
                    last: "Trang cuối"
                },
            },
        });
    });
</script>
@endsection
