@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>transactions</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>ID</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Jenis Transaksi</th>
                                <th>Jumlah</th>
                                <th>Tanggal/waktu</th>
                            </thead>
                            <tbody>
                                @forelse ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id}}</td>    
                                        <td>{{ $transaction->Product->sku}}</td>
                                        <td>{{ $transaction->Product->name }}</td>
                                        @if($transaction->jenis_transaksi==1)
                                        <td>Barang Masuk</td>
                                        @else
                                        <td>Barang Keluar</td>
                                        @endif
                                        <td>{{ $transaction->jumlah }}</td>
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