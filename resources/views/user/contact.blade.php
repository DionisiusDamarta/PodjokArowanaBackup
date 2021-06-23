@extends('user.layout')
@section('content')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p>
                        <span>Address:</span><br>
                        Perumahan Griya Amarta no C7. Joyo Agung, Malang
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p>
                        <span>Phone:</span><br>
                        <a href="tel://+62 895-0700-7645">+62 895-0700-7645</a>
                    </p>
                    <p>
                        <span>Whatsapp:</span>
                        <a href="https://wa.me/6289507007645">wa.me/6289507007645</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p>
                        <span>Instagram</span>
                        <a href="https://www.instagram.com/podjok_arowana">@podjok_arowana</a>
                    </p>
                    <p>
                        <span>Facebook</span><br>
                        <a href="https://www.facebook.com/arwana.amarta">Podjok Arowana</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p>
                        <span>Email:</span>
                        <a href="mailto:labitamaudy11@gmail.com">labitamaudy11@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>
@endsection