@extends('admin.layout')

@section('content')
    
@php
    $formTitle = !empty($transaction) ? 'Update' : 'Stok'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $formTitle }} {{$product->name}}</h2>
                </div>
                <div class="card-body">
                    @if (!empty($transaction))
                        {!! Form::model($transaction, ['url' => ['admin/transactions', $transactions->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/transactions']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('jumlah', 'Jumlah') !!}
                            {{ Form::hidden('product_id',$product->id) }}
                            {{ Form::hidden('jenis_transaksi',1) }}
                            {!! Form::text('jumlah', null, ['class' => 'form-control', 'placeholder' => 'Jumlah stok masuk']) !!}
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                            <a href="{{ url('admin/transactions') }}" class="btn btn-secondary btn-default">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection