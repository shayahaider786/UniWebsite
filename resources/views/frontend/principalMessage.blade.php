@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Principal Message</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Principal Message</li>
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
                        <h1 class="mb-4">Message by Principal</h1>
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <img src="frontend/img/assets/pricipleImg.png" class="img-fluid rounded" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <p class="mb-3 alignPara">
                                    Welcome to SEC, where we have been committed to academic excellence and holistic development since 1998. As principal, I am honored to lead a school that values each student's unique potential and strives to provide a nurturing environment where they can flourish both academically and personally. At SEC, we believe that education is not just about academic success but also about building character, resilience, and a strong sense of purpose.
                                </p>
                                <p class="mb-3 alignPara">
                                    Sharif Education complex is a unique educational project in providing extraordinary care and education with a sense of ownership to the students. It has completed its 26 academic years obtaining very good results and achieving its mission. The mission of the school is to educate and train the generation making them right spirited Muslims and Pakistani citizens. During the education, necessary emphasis is laid on the character building and personality development of the students. The curriculum, thus, includes a broad and well-planned program for academic, mental and physical training of the students which will enable them to adopt any profession in life.
                                </p>
                                <p class="mb-3 alignPara">
                                    Thank you for entrusting us with your child’s education. Together, as a community of students, parents, and teachers, we aim to make their educational journey enriching and impactful. We look forward to a bright future with you as part of the SEC family.
                                </p>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <h6 class="text-primary mb-1">Warm regards,</h6>
                                                <small>Muhammad Ashfaq</small><br>
                                                <small>Principal, SEC</small>
                                            </div>
                                        </div>
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