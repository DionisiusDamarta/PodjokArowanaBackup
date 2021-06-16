@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Laporan Penjualan</h2>
                    </div>
                    <div class="card-body"> 
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>No. Nota</th>
                                <th>Total</th>
                                <th>Pembayaran</th>
                                <th>Kembalian</th>
                                <th>Tanggal/waktu</th>
                            </thead>
                            <tbody>
                                @forelse ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->no_order}}</td>    
                                        <td>{{ $transaction->grand_total}}</td>
                                        <td>{{ $transaction->pembayaran }}</td>
                                        <td>{{ $transaction->kembalian }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection