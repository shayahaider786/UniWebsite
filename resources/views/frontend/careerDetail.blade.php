@extends('frontend.layout.app')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Career</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Caeers</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 alignPara">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 col-sm-8 mb-3 mb-sm-0">
                                    <h5 class=" text-start">{{$career->title}}</h5>
                                    <p class=" text-start">{{$career->short_description}}</p>
                                    <p class="text-start ">{{$career->long_description}}</p>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- About End -->

@endsection