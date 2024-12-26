@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">How To Apply</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">How To Apply</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">Admision form</h1>
                        <div class="row">
                            <div>
                                <p class="text-justify">
                                    Welcome to our admission portal! We are excited to assist you in beginning or continuing your academic journey with us. 
                                    For parents and guardians looking to enroll their children in early education or school programs, 
                                    please access the, 
                                    where you will find all the necessary details to complete the enrollment process. 
                                    If you are a student aiming to take the next step toward advanced education, 
                                    our is tailored to guide you through this important transition. 
                                    Our institution is committed to providing a seamless application experience and fostering a supportive environment for every learner. 
                                    Should you require assistance, our dedicated admission team is here to help at every step. 
                                    Take the first step today and join a community that values excellence in education.
                                </p>
                            </div>
                            <div class="col-md-12 text-center d-flex justify-content-evenly">
                                <a class="btn btn-primary" href="{{route('matriclationAdmision')}}">adminsion form motesari to matric</a>
                                <a class="btn btn-primary" href="{{route('intermediateAdmision')}}">adminsion form  intermediate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@endsection