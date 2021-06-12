@extends('admin.layout')

@section('content')
    
@php
    $formTitle = !empty($category) ? 'Update' : 'Tambah'    
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-4">
            @include('admin.products.product_menus')
        </div>
        <div class="col-lg-8">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>{{ $formTitle }} Produk</h2>
                </div>
                <div class="card-body">
                    @include('admin.partials.flash', ['$errors' => $errors])
                    @if (!empty($product))
                        {!! Form::model($product, ['url' => ['admin/products', $product->id], 'method' => 'PUT']) !!}
                        {!! Form::hidden('id') !!}
                    @else
                        {!! Form::open(['url' => 'admin/products']) !!}
                    @endif
                        <div class="form-group">
                            {!! Form::label('sku', 'SKU') !!}
                            {!! Form::text('sku', null, ['class' => 'form-control', 'placeholder' => 'sku']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nama produk') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nama produk']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Harga') !!}
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'harga']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_ids', 'Kategori') !!}
                            {!! General::selectMultiLevel('category_ids[]', $categories, ['class' => 'form-control', 'multiple' => true, 'selected' => !empty(old('category_ids')) ? old('category_ids') : $categoryIDs, 'placeholder' => '-- Choose Category --']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('short_description', 'Deskripsi singkat') !!}
                            {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'deskripsi singkat']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Deskripsi produk') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'deskripsi produk']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('weight', 'Berat') !!}
                            {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'berat']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('length', 'Panjang') !!}
                            {!! Form::text('length', null, ['class' => 'form-control', 'placeholder' => 'panjang']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('width', 'Lebar') !!}
                            {!! Form::text('width', null, ['class' => 'form-control', 'placeholder' => 'lebar']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('height', 'Tinggi') !!}
                            {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'tinggi']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('status', $statuses , null, ['class' => 'form-control', 'placeholder' => '-- Set Status --']) !!}
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                            <a href="{{ url('admin/products') }}" class="btn btn-secondary btn-default">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection