@extends('frontend.layout.appTwo')

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
                    <h1 class="text-center">Career</h1>
                    <div class="col-md-12 alignPara">
                        <p>Teaching is one of the most impactful and respected career paths, vital to shaping the social and economic fabric of our society. At SEC, we believe that education is more than academics; it is about fostering the holistic growth of young minds. Our teachers play a pivotal role in this mission, inspiring students to achieve their best while nurturing their individual strengths and preparing them for the challenges of the modern world.</p>
                        <p>We seek educators who are deeply committed to their profession and understand the unique ways teenagers learn and thrive. A minimum of a Master’s degree in the relevant teaching discipline is required, with preference given to experienced teachers. We value individuals who bring enthusiasm, creativity, and dedication to their roles, ensuring that students receive both academic excellence and personal mentorship.</p>
                        <p>Applications for teaching and non-teaching positions must be routed through the Main Office and are managed by the Public Relations Officer (PRO). The PRO oversees the review and shortlisting of applications, as well as responding to employment inquiries. Direct applications to the Principal or other staff members are not entertained to ensure a structured and fair process.</p>
                        <p>Prospective candidates are encouraged to send their CVs and cover letters via email to <b>hr@sharif.edu.pk</b>  or submit them to the Main Office. At SEC, we are committed to building a team of passionate educators who inspire and empower the leaders of tomorrow.</p>
                    </div>
               </div>
            </div>
        </div>
         <div class="container-xxl py-5">
            <div class="container">
               <div class="row">
                    <h1 class="">Current Openings</h1>
                    <div class="col-md-12 alignPara">
                        <div class="row">
                            @forelse ($careers as $career)
                            <div class="col-md-4 col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">{{$career->title}}</h5>
                                    <p class="card-text">{{$career->short_description}}</p>
                                    <a href="{{ route('careerDetail', $career->title) }}" class="btn btn-primary">Apply Now    </a>
                                </div>
                                </div>
                              </div>
                            @empty
                               <p><b>There is no Opening </b></p>
                            @endforelse
                            
                          </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- About End -->

@endsection