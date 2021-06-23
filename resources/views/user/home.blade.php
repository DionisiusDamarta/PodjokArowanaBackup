@extends('user.layout')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a class="img-prod" href="{{ url('product/'. $product->slug) }}">
                        @if ($product->productImages->first())
                        <img class="img-fluid" style="width:100%;min-height:180px;object-fit: cover;"
                            src="{{ asset('storage/'.$product->productImages->first()->path) }}"
                            alt="{{ $product->name }}">
                        @else
                        <img class="img-fluid"
                            src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}"
                            alt="{{ $product->name }}">
                        @endif
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$product->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2">Rp {{number_format($product->price)}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        {{$products->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection