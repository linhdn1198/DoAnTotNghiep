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
                    <h1 class="m-0 text-dark">{{ __('admin.show_order') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">{{ __('admin.management_order') }}</a></li>
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
                            <h3 class="card-title">{{ __('admin.btn_show') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>{{ __('admin.image') }}</label>
                                <img src="" alt="">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">{{ __('admin.username') }} :</label>
                                <p class="col-sm-4">{{ $order->user->name }}</p>
                                <label class="col-sm-2">{{ __('admin.address') }} :</label>
                                <p class="col-sm-4">{{ $order->user->address }}</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">{{ __('admin.date_of_birth') }} :</label>
                                <p class="col-sm-4">{{ $order->user->dateOfBirth }}</p>
                                <label class="col-sm-2">{{ __('admin.phone') }} :</label>
                                <p class="col-sm-4">{{ $order->user->phone }}</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">{{ __('admin.gender') }} :</label>
                                <p class="col-sm-4">{{ $order->user->gender === 1 ? __('admin.male') : __('admin.female') }}</p>
                                <label class="col-sm-2">{{ __('admin.email') }} :</label>
                                <p class="col-sm-4">{{ $order->user->email }}</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">{{ __('admin.total') }} : </label>
                                <p class="col-sm-4">{{ formatCurrency($order->total) }} {{ __('admin.unit') }}</p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('admin.order_detail') }}</label>
                            </div>
                            <table id="table-order-detail" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr role="row">
                                        <th>{{ __('admin.stt') }}</th>
                                        <th>{{ __('admin.product') }}</th>
                                        <th>{{ __('admin.price') }}</th>
                                        <th>{{ __('admin.quantity') }}</th>
                                        <th>{{ __('admin.total') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderDetails as $index => $orderDetail)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                @foreach (json_decode($orderDetail->product->image, true) as $image)
                                                    <img style="with:30px; height:60px;"
                                                        src="{{ asset($image['name']) }}" alt="">
                                                @endforeach
                                                {{ $orderDetail->product->name }}
                                            </td>
                                            <td>{{ formatCurrency($orderDetail->price) }}</td>
                                            <td>{{ $orderDetail->quantity }}</td>
                                            <td>{{ formatCurrency($orderDetail->price * $orderDetail->quantity) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr role="row">
                                        <th>{{ __('admin.stt') }}</th>
                                        <th>{{ __('admin.product') }}</th>
                                        <th>{{ __('admin.price') }}</th>
                                        <th>{{ __('admin.quantity') }}</th>
                                        <th>{{ __('admin.total') }}</th>
                                    </tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <a href="{{ route('orders.index') }}" class="btn btn-outline-warning"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;&nbsp; {{ __('admin.back') }}</a>
                            <form action="{{ route('orders.update', $order->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($order->status === 0)
                                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-check-circle"></i>&nbsp;&nbsp; {{ __('admin.change_status') }}</button>
                                @else
                                    <button type="submit" class="btn btn-outline-primary"><i class="fas fa-spinner"></i>&nbsp;&nbsp; {{ __('admin.change_status') }}</button>
                                @endif
                            </form>
                        </div>
                        <!-- /.card-footer -->
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
        $('#table-order-detail').DataTable({
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
