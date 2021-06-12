@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Products</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.partials.flash')
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th>Kode Produk</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>    
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->productInventory->qty }}</td>
                                        <td>
                                            <a href="{{ url('admin/transactions/masuk/'.$product->id) }}" class="btn btn-warning btn-sm">Input Barang Masuk</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection