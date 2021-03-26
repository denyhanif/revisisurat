@extends('layouts.master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
    </div>
    @if(auth()->user())
        @can('isKades')
        <div class="row ">
            <div class="col col-md-8">
                <div class="card shadow mb-4">
                    <div class=" card-header py-3">
                        <div class="row">
                            <h6 class="m-0 font-weight-bold text-primary col-md-6">Jumlah Pesanan Surat Pada Tahun 2021</h6>
                            
                        </div>
                    
                    </div>
                    <form action="{{ route('dashboard.kades') }}" method="GET">
                    <div class="card-body">
                    
                        <div class="d-flex justify-content-between">
                        {{--  <p class=" col-md-4 ">Jumlah Pesanan pada </p>
                        <select name="tahun" id="tahun" class="form-control">
                            
                            <option selected value="all">Pilih Tahun</option>
                            @foreach ($tahun as $row)
                                <option value="{{ $row }}">
                                    <a href="">{{ $row }}</a>
                                </option>                           
                            @endforeach
                         </select>
                        <button type="submit" name="tahun" class="btn btn-sm btn-success">filter</button>
                --}}
                    </div>
                    </form>
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
                <hr>
                    <p>Total Pesanan Surat Masuk: {{ $Totalpesanan }}</p>
                </div>
            
                </div>
            </div>
            {{--  chart bar2  --}}
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Status Pesanan</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="chartbar2"></canvas>
                        </div>
                        <hr>
                        <span class="badge badge-danger badge-counter">tolak</span>
                        <span class="badge badge-success badge-counter">ambil</span>
                        <span class="badge badge-primary badge-counter">verivikasi</span>
                            <span class="badge badge-secondary badge-counter">proses</span>
                        <span class="badge badge-info badge-counter">jadi</span>

                        
                    </div>
                </div>
            </div>
             {{--  end chart bar 2  --}}
        </div>
        @endcan
    @endif

    @if(auth()->user())
        @can('isKades')
            <div class="d-sm-flex align-items-center justify-content-between mb-1">
            <h1 class="h3 mb-0 text-gray-800 ">Proses Surat Yang Berjalan</h1>
            </div>
            <div class="row">
        @foreach ($kategori as $row)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card text-black shadow h-100 py-2 pb-0" 
                
                 @if($row->id === 1)style="background-color: #173f5f"
                        @elseif($row->id === 2) style ="background-color: #20639b"
                        @elseif($row->id === 3)style ="background-color: #3caea3"
                        @elseif($row->id === 4)style="background-color: #02353c"
                        @elseif($row->id === 5)style="background-color: #4f97a3"
                        @elseif($row->id === 6)style="background-color: #41d9b0"
                        @else style ="background-color: #1dcdfe"
                        @endif

                                    >
                <div class="card-body pb-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col ">
                        <div class="text-xs font-weight-bold text-gray-100 text-uppercase mb-1"><h6>{{ $row->nama }}</h6></div>
                            <div class="row m-0">
                                <div class="h8 m-1 font-weight-bold text-xs text-white">
                                    proses : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                    return $q->where('status',0);})->whereYear('created_at',now())->count() }}
                                </div>
                                <div class="h8 m-1 font-weight-bold text-xs text-white">
                                    verifikasi : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                    return $q->where('status',1);})->whereYear('created_at',now())->count() }}
                                </div>
                                <div class="h8 m-1 font-weight-bold text-xs text-white">
                                    jadi : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                    return $q->where('status',2);})->whereYear('created_at',now())->count() }}
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="h8 m-1 font-weight-bold text-xs text-white">
                                    Tolak : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                    return $q->where('status',3);})->whereYear('created_at',now())->count() }}
                                </div>
                                <div class="h8 m-1 font-weight-bold text-xs text-white">
                                    Ambil : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                    return $q->where('status',4);})->count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
        @endcan
    @endif
    {{--  dashboard admin dan sfatt  --}}
    @if(auth()->user())
        @can('isAdmin')
        <div class="row">
            @foreach ($kategori as $row)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h6>{{ $row->nama }}</h6></div>

                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                proses : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                return $q->where('status',0);})->count() }}
                            </div>
                            </div>
                        </div>
                        <div class="text-right mb-0 mt-0 p-0">
                            @if(auth()->user())
                                @can('isAdmin')
                                    <a class="btn btn-primary " href="{{ route('list.kategori', $row->id) }}">Detail</a>
                                @endcan
                                @can('isStaff')
                                    <a class="btn btn-primary " href="{{ route('list.kategori', $row->id) }}">Detail</a>
                                @endcan
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endcan
    @endif
    @if(auth()->user())
        @can('isStaff')
        <div class="row">
            @foreach ($kategori as $row)
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h6>{{ $row->nama }}</h6></div>

                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                proses : {{ $row->pengajuan()->whereHas('pesanan',function($q){
                                return $q->where('status',0);})->count() }}
                            </div>
                            </div>
                        </div>
                        <div class="text-right mb-0 mt-0 p-0">
                            @if(auth()->user())
                                @can('isAdmin')
                                    <a class="btn btn-primary " href="{{ route('list.kategori', $row->id) }}">Detail</a>
                                @endcan
                                @can('isStaff')
                                    <a class="btn btn-primary " href="{{ route('list.kategori', $row->id) }}">Detail</a>
                                @endcan
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endcan
    @endif

@endsection

@section('js')
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>

    {{--  <script src="{{ asset('admin/js/demo/chart-bar-demo.js') }}"></script>  --}}
    {{-- bar chart --}}
    <script>
                // Set new default font family and font color to mimic Bootstrap's default styling
        (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = "#858796";

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + "").replace(",", "").replace(" ", "");
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
                dec = typeof dec_point === "undefined" ? "." : dec_point,
                s = "",
                toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return "" + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || "").length < prec) {
                s[1] = s[1] || "";
                s[1] += new Array(prec - s[1].length + 1).join("0");
            }
            return s.join(dec);
            }

            // Bar Chart Example
            var ctx = document.getElementById("myBarChart");
            var myBarChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Kematian", "Kelahiran", "Keterangan", "Pengantar Pindah", "Form. Permohonan Pindah", "Surat Permohonan Pindah","Form. Permohonan Pidah Datang"],
                datasets: [
                {
                    
                    label: "Jumlah Surat",
                    backgroundColor: [
                    "#003152",
                    "#20639b",
                    "#3caea3",
                    "#008081",
                    "#4f97a3",    
                    "#41d9b0",
                    "#1dcdfe",
                    
                    ],
                    
                    hoverBackgroundColor: "#11b1cc",
                    borderColor: "#4e73df",
                    data: {{ $bar1 }},
                },
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0,
                },
                },
                scales: {
                xAxes: [
                    {
                    time: {
                        unit: "jumlah",
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        maxTicksLimit: 6,
                    },
                    maxBarThickness: 25,
                    },
                ],
                yAxes: [
                    {
                    ticks: {
                        min: 0,
                        max: {{ $barmax  }},
                        maxTicksLimit: 6,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function (value, index, values) {
                        return "" + number_format(value);
                        },
                    },
                    gridLines: {
                        color: "#8f7480",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2],
                    },
                    },
                ],
                },
                legend: {
                display: false,
                },
                tooltips: {
                titleMarginBottom: 10,
                titleFontColor: "#6e707e",
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": " + number_format(tooltipItem.yLabel);
                    },
                },
                },
            },
            });

    </script>

       <script>
                // Set new default font family and font color to mimic Bootstrap's default styling
        (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = "#858796";

        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + "").replace(",", "").replace(" ", "");
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
                dec = typeof dec_point === "undefined" ? "." : dec_point,
                s = "",
                toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return "" + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || "").length < prec) {
                s[1] = s[1] || "";
                s[1] += new Array(prec - s[1].length + 1).join("0");
            }
            return s.join(dec);
            }

            // Bar Chart Example
            var ctx = document.getElementById("chartbar2");
            var myBarChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Proses", "Verfikasi", "jadi", "Tolak", "ambil"],
                datasets: [
                {
                    label: "Jumlah Surat",
                   backgroundColor: [
                    "#8f7480",
                    "#4e60da",
                    "#31b1ac",
                    "#db1f10",
                    "#1bc17a",
                    
                    ],
                    hoverBackgroundColor: ["#8f8585",
                    "#4e73df",
                    "#36b9cc",
                    "#db1f10",
                    "#1cc88a",],
                    borderColor: "#4e73df",
                    data: {{ $fixpie }},
                },
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0,
                },
                },
                scales: {
                xAxes: [
                    {
                    time: {
                        unit: "jumlah",
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        maxTicksLimit: 6,
                    },
                    maxBarThickness: 25,
                    },
                ],
                yAxes: [
                    {
                    ticks: {
                        min: 0,
                        max: {{ $bar2max  }},
                        maxTicksLimit: 6,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function (value, index, values) {
                        return "" + number_format(value);
                        },
                    },
                    gridLines: {
                        color: "#8f7480",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2],
                    },
                    },
                ],
                },
                legend: {
                display: false,
                },
                tooltips: {
                titleMarginBottom: 10,
                titleFontColor: "#6e707e",
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": " + number_format(tooltipItem.yLabel);
                    },
                },
                },
            },
            });

    </script>

    
@endsection