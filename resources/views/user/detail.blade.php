@extends('user.layout')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a image-popup href="{{ url('product/'. $product->slug) }}"></a>
                @if ($product->productImages->first())
                <img class="img-fluid" src="{{ asset('storage/'.$product->productImages->first()->path) }}"
                    alt="{{ $product->name }}">
                @else
                <img class="img-fluid" src="{{ asset('themes/ezone/assets/img/product/fashion-colorful/1.jpg') }}"
                    alt="{{ $product->name }}">
                @endif
            </div>
            <!-- <div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="images/large-ikan-arwanafix.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div> -->
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$product->name}}</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2"
                            style="color: #000;">{{$product->transactions->where('jenis_transaksi',2)->sum('jumlah')}}
                            <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price"><span>Rp {{number_format($product->price)}}</span></p>
                <p>{{$product->short_description}}</p>
                <p>{{$product->description}}</p>
                <p><b> Stok : {{$product->productInventory->qty}} unit</b></p>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection