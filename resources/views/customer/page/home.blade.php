@extends('customer.layout3')

@section('before-css')
    <link rel="stylesheet" href="../../customer/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
@endsection

@section('main-content')
    {{--  header  --}}
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="/customer/dist/images/img/cls1.webp" width="100%" height="100%" >
                <div class="container">
                    <div class="carousel-caption text-start text-dark">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="/customer/dist/images/img/cls2.webp" width="100%" height="100%" >
                <div class="container">
                    <div class="carousel-caption  text-dark">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="/customer/dist/images/img/cls3.webp" width="100%" height="100%" >
                <div class="container">
                    <div class="carousel-caption text-start  text-dark">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg bg-wn text-dark btn-wn fw-semibold" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <style>
        #myCarousel .carousel-control-prev, .carousel-control-next:hover{
            background: none!important;
        }
    </style>
@endsection
