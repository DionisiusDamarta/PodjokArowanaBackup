@extends('admin.layout')

@section('content')

<div class="content-wrapper">
    <div class="content">
        <div class="row justify-content-end ">
            <div class="col d-flex justify-content-end">
                <div class="dropdown d-inline-block mb-1">
                    <button class="btn btn-outline-primary btn-square dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-display="static">
                        Primary
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Hari ini</a>
                        <a class="dropdown-item" href="#">Minggu ini</a>
                        <a class="dropdown-item" href="#">Bulan ini</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$transaksi}}</h2>
                        <p>Total Transaksi</p>
                        <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$masuk}}</h2>
                        <p>Barang Masuk</p>
                        <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{$keluar}}</h2>
                        <p>Barang Keluar</p>
                        <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">Rp {{number_format($pemasukan)}}</h2>
                        <p>Total Pemasukkan</p>
                        <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-12">
                <!-- Top Sell Table -->
                <div class="card card-table-border-none">
                    <div class="card-header justify-content-between">
                        <h2>Top Sales</h2>
                        <div>
                            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                    <li class="dropdown-item"><a href="#">Action</a></li>
                                    <li class="dropdown-item"><a href="#">Another action</a></li>
                                    <li class="dropdown-item"><a href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 compact-units" data-simplebar style="height: 384px;">
                        <table class="table ">
                            <tbody>
                                @foreach($sales as $sale)
                                <tr>
                                    <td class="text-dark">{{$sale->product->name}}</td>
                                    <td class="text-center">{{$sale->jumlah}}</td>
                                    <td class="text-right">{{round($sale->jumlah/$keluar *100)}}%</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <!-- Top Sell Table -->
                <div class="card card-table-border-none">
                    <div class="card-header justify-content-between">
                        <h2>Most Inventory</h2>
                        <div>
                            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                    <li class="dropdown-item"><a href="#">Action</a></li>
                                    <li class="dropdown-item"><a href="#">Another action</a></li>
                                    <li class="dropdown-item"><a href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 compact-units" data-simplebar style="height: 384px;">
                        <table class="table ">
                            <tbody>
                                @foreach($inventories as $inventory)
                                <tr>
                                    <td class="text-dark">{{$inventory->product->name}}</td>
                                    <td class="text-center">{{$inventory->qty}}</td>
                                    <td class="text-right">{{round($inventory->qty/$inventories->sum('qty') *100)}}%
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer bg-white py-4">
                        <a href="#" class="btn-link py-3 text-uppercase">View Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop