@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Facilities</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Facilities</li>
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
                        <h1 class="mb-4 text-center">Facilities</h1>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-regular fa-futbol"></i></div>
                                    <div class="w-75">
                                        <h3>Play Grounds</h3>
                                        <p>
                                            Sports SEC’s sports societies  in all blocks are active in preparing young athletes, sportsmen and building up  sportsman spirit in them. Annual sports day is held every year in the school’s sports ground for a live demonstration of their  physical activities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-vial"></i></div>
                                    <div class="w-75">
                                        <h3>Chemistry Lab</h3>
                                        <p>
                                            Opening Ways of Practical Advancement
                                            Highly Equipped Chemistry Labs
                                            Supervised by Highly qualified Science Teachers
                                            Separately planned Experiments for Girls and Boys
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-computer" style="font-size: 35px;"></i></div>
                                    <div class="w-75">
                                        <h3>Computer Lab</h3>
                                        <p>
                                            Highly Equipped air conditioned lab
                                            Offer internet for students’ convenience
                                            Supervised by highly qualified computer teachers
                                            Lab assistant for sorting out technical issues
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-gear"></i></div>
                                    <div class="w-75">
                                        <h3>Physics Lab</h3>
                                        <p>
                                            Opening Ways of Practical Advancement
                                            Highly Equipped Physics Labs
                                            Supervised by Highly qualified Science Teachers
                                            Separately planned Experiments for Girls and Boys
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-dna"></i></div>
                                    <div class="w-75">
                                        <h3>Biology Lab</h3>
                                        <p>
                                            Opening Ways of Practical Advancement
                                            Highly Equipped Biology Labs
                                            Supervised by Highly qualified Science Teachers
                                            Separately planned Experiments for Girls and Boys
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-book"></i></div>
                                    <div class="w-75">
                                        <h3>Library</h3>
                                        <p>
                                            Offering Adequate Variety of Books
                                            Timely updated books
                                            Easily accessible for students
                                            An endeavor to create  reading habits in students
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-language" style="font-size: 33px;"></i></div>
                                    <div class="w-75">
                                        <h3>Language Lab</h3>
                                        <p>
                                            APSAC has also arranged a video room for the students, where they are shown cartoon, animated and children movies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facalityBox d-flex justify-content-between flex-wrap align-items-center">
                                    <div class="w-25"><i class="fa-solid fa-bus"></i></div>
                                    <div class="w-75">
                                        <h3>Transport</h3>
                                        <p>
                                            The school will provided transport facilities according to the specific routes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection