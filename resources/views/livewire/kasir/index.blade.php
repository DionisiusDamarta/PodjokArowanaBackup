<div>
    <style>
        .qty {
            width: 20%;
            display: inline;
        }
    </style>
    <div class="card-body">
        <div class="card-body border-top pb-5 p-0 mt-3">
            <form class="row g-3 mt-3" wire:submit.prevent="submit">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Product</label>
                <div class="col-sm-8">
                    <select class="form-control @error('product_id') is-invalid @enderror " wire:model="product_id" required>
                            <option>-- Pilih Product --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}"> {{ $product->name }} </option>
                        @endforeach
                    </select>
                    @error('product_id')
                    {{-- <span class="error"></span>  --}}
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </div>
            </form>
        </div>

        <!-- @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif -->

        <div class="card-body border-top pb-5 p-0 mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">qty</th>
                        <th scope="col">Harga/Qty</th>
                        <th scope="col" style="width: 200px;">Total</th>
                        <th scope="col" style="width: 10px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $transaction->product->name }} </td>
                        <td>
                            <div>
                                @if ($transaction->qty > 1)
                                    <span class="btn btn-danger btn-sm" wire:click="decrement({{$transaction->id}})">-</span>
                                @endif
                                <input type="text" class="form-control qty" value="{{ $transaction->qty }}" readonly>
                                <span class="btn btn-success btn-sm" wire:click="increment({{$transaction->id}})">+</span>
                            </div>
                        </td>
                        <td>Rp. {{ number_format($transaction->product->price)}} </td>
                        <td>Rp. {{ number_format($transaction->product->price*$transaction->qty)}} </td>
                        <td>
                            <button type="button" wire:click="deleteTransaction({{$transaction->id}})" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="text-align:right;">Total Pembelian</td>
                    <td>
                        Rp {{ number_format($transactions->sum('total')) }}
                    </td>
                    <tr>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="text-align:right;">Pembayaran</td>
                        <td style="text-align:right;">
                            <input type="number" wire:model="pembayaran" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="border:none;"></td>
                        <td style="text-align:right;">Kembalian</td>
                        <td style="text-align:left;">
                        Rp  {{ number_format($pembayaran - $transactions->sum('total')) }}
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="">
                <button type="button" wire:click="save" class="btn btn-success btn-sm float-right">Submit</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
@endpush