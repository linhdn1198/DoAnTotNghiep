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
                    <h1 class="m-0 text-dark">{{ __('admin.management_user') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ __('admin.management_user') }}</li>
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
                            <h3 class="card-title">{{ __('admin.list_user') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <a class="btn btn-outline-success my-3" href="{{ route('users.create') }}">
                                        <i class="fas fa-plus"></i>&nbsp;&nbsp;{{ __('admin.btn_add') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="table-user" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr role="row">
                                                <th>{{ __('admin.stt') }}</th>
                                                <th>{{ __('admin.username') }}</th>
                                                <th>{{ __('admin.date_of_birth') }}</th>
                                                <th>{{ __('admin.gender') }}</th>
                                                <th>{{ __('admin.address') }}</th>
                                                <th>{{ __('admin.phone') }}</th>
                                                <th>{{ __('admin.email') }}</th>
                                                <th>{{ __('admin.role') }}</th>
                                                <th>{{ __('admin.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index => $user)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ formatDateDDMMYY($user->dateOfBirth) }}</td>
                                                    <td>{{ $user->gender === 1 ? __('admin.male') : __('admin.female') }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role === 1 ? __('admin.admin') : __('admin.member') }}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-outline-warning"
                                                            href="{{ route('users.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                                                        <form class="d-inline" action="{{ route('users.destroy', $user->id) }}" method="post">
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
                                                <th>{{ __('admin.stt') }}</th>
                                                <th>{{ __('admin.username') }}</th>
                                                <th>{{ __('admin.date_of_birth') }}</th>
                                                <th>{{ __('admin.gender') }}</th>
                                                <th>{{ __('admin.address') }}</th>
                                                <th>{{ __('admin.phone') }}</th>
                                                <th>{{ __('admin.email') }}</th>
                                                <th>{{ __('admin.role') }}</th>
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
        $('#table-user').DataTable({
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
