@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Trustees</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Trustees</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">BOARD OF TRUSTEES</h1>
                        <div class="row mt-5">
                            <div class="trusteeBox text-center col-md-4">
                                <img src="frontend/img/assets/img1.jpg" width="100%" height="350px" alt="">
                                <h4 class="mt-2">Mian Muhammad Sharif</h4>
                                <p>Founding Chairman</p>
                            </div>
                            <div class="trusteeBox text-center col-md-4">
                                <img src="frontend/img/assets/img2.jpg" width="100%" height="350px" alt="">
                                <h4 class="mt-2">Mian Muhammad Nawaz Sharif</h4>
                                <p>Present Chairman & Trustee</p>
                            </div>
                            <div class="trusteeBox text-center col-md-4">
                                <img src="frontend/img/assets/img3.jpeg" width="100%" height="350px" alt="">
                                <h4 class="mt-2">Maryam Nawaz Sharif</h4>
                                <p>Chairperson</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@endsection