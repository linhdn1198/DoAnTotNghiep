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
                    <h1 class="m-0 text-dark">{{ __('admin.dashboard') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">{{ __('admin.dashboard') }}</li>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $info['order'] }}</h3>

                            <p>{{ __('admin.order') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('orders.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $info['productCategory'] }}</h3>

                            <p>{{ __('admin.product_category') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('product-category.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $info['product'] }}</h3>

                            <p>{{ __('admin.product') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('products.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $info['commentProduct'] }}</h3>

                            <p>{{ __('admin.comment_product') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('comment-product.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $info['postCategory'] }}</h3>

                            <p>{{ __('admin.post_category') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('post-category.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $info['postCategory'] }}</h3>

                            <p>{{ __('admin.post') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('posts.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $info['post'] }}</h3>

                            <p>{{ __('admin.tag') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('tags.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $info['user'] }}</h3>

                            <p>{{ __('admin.user') }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('users.index') }}" class="small-box-footer">{{ __('admin.more_info') }} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Bar Chart</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('admin.revenue') }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>{{ __('admin.chose_date') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservation">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="chart">
                            <canvas id="lineChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
@endsection

@section('script')
<script>
    let revenue = {!! $revenue !!};
    var lineChart;
    console.log(revenue);
    let optionDateRange = {
        "applyButtonClasses": "btn-outline-success",
        "cancelClass": "btn-outline-default",
        "locale": {
            "format": "MM/DD/YYYY",
            "separator": " - ",
            "applyLabel": "Xem",
            "cancelLabel": "Hủy",
            "fromLabel": "Đến",
            "toLabel": "Từ",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "CN",
                "T2",
                "T3",
                "T4",
                "T5",
                "T6",
                "T7"
            ],
            "monthNames": [
                "Tháng 1",
                "Tháng 2",
                "Tháng 3",
                "Tháng 4",
                "Tháng 5",
                "Tháng 6",
                "Tháng 7",
                "Tháng 8",
                "Tháng 9",
                "Tháng 10",
                "Tháng 11",
                "Tháng 12"
            ],
            "firstDay": 1
        },
    };

    $('#reservation').daterangepicker(optionDateRange, function(start, end, label) {
        let startDay = start.format('YYYY-MM-DD');
        let endDay = end.format('YYYY-MM-DD');

        axios.get('{{ route('revenue') }}', {
            params: {
                startDay: startDay,
                endDay: endDay,
            }
        })
        .then((respone) => {
            console.log(respone.data);
            lineChart.data.labels = respone.data.date;
            lineChart.data.datasets[0].data = respone.data.total;
            lineChart.update();
        })
        .catch((error) => {

        });
    });

    function hanldeShowRevenue()
    {
        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        };

        var areaChartData = {
            labels: revenue.date,
            datasets: [{
                    label: 'Doanh thu',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: true,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: revenue.total
                },
                // {
                //     label: 'Electronics',
                //     backgroundColor: 'rgba(210, 214, 222, 1)',
                //     borderColor: 'rgba(210, 214, 222, 1)',
                //     pointRadius: false,
                //     pointColor: 'rgba(210, 214, 222, 1)',
                //     pointStrokeColor: '#c1c7d1',
                //     pointHighlightFill: '#fff',
                //     pointHighlightStroke: 'rgba(220,220,220,1)',
                //     data: [65, 59, 80, 81, 56, 55, 40, 55, 40, 55, 40, 55, 40]
                // },
            ]
        };

        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        // lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })
    }
    hanldeShowRevenue();
    // var areaChartData = {
    //     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', '8', '9', '10', '11', '12'],
    //     datasets: [{
    //             label: 'Digital Goods',
    //             backgroundColor: 'rgba(60,141,188,0.9)',
    //             borderColor: 'rgba(60,141,188,0.8)',
    //             pointRadius: false,
    //             pointColor: '#3b8bba',
    //             pointStrokeColor: 'rgba(60,141,188,1)',
    //             pointHighlightFill: '#fff',
    //             pointHighlightStroke: 'rgba(60,141,188,1)',
    //             data: [28, 48, 40, 19, 86, 27, 90, 27, 90, 27, 90, 27, 90]
    //         },
    //         {
    //             label: 'Electronics',
    //             backgroundColor: 'rgba(210, 214, 222, 1)',
    //             borderColor: 'rgba(210, 214, 222, 1)',
    //             pointRadius: false,
    //             pointColor: 'rgba(210, 214, 222, 1)',
    //             pointStrokeColor: '#c1c7d1',
    //             pointHighlightFill: '#fff',
    //             pointHighlightStroke: 'rgba(220,220,220,1)',
    //             data: [65, 59, 80, 81, 56, 55, 40, 55, 40, 55, 40, 55, 40]
    //         },
    //     ]
    // }

    // var barChartCanvas = $('#barChart').get(0).getContext('2d')
    // var barChartData = jQuery.extend(true, {}, areaChartData)
    // var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    // var barChartOptions = {
    //     responsive: true,
    //     maintainAspectRatio: false,
    //     datasetFill: false
    // }

    // var barChart = new Chart(barChartCanvas, {
    //     type: 'bar',
    //     data: barChartData,
    //     options: barChartOptions
    // })


    // new Chart(document.getElementById("lineChart"), {
    //     "type": "line",
    //     "data": {
    //         "labels": ["January", "February", "March", "April", "May", "June", "July"],
    //         "datasets": [{
    //             "label": "My First Dataset",
    //             "data": [65, 59, 80, 81, 56, 55, 40],
    //             "fill": false,
    //             "borderColor": "rgb(75, 192, 192)",
    //             "lineTension": 0.1
    //         }]
    //     },
    //     "options": {}
    // })
</script>
@endsection
