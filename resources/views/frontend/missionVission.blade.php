@extends('frontend.layout.app')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Mission & Vission</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Mission & Vission</li>
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
                        <h1 class="mb-4 text-center">Over Vission</h1>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="mb-3">
                                    The vision of Sharif Education Complex is to create a dynamic learning environment where every student is empowered to realize their full potential. We aspire to be a leading educational institution recognized for cultivating compassionate leaders who are equipped to address global challenges. Our vision is to inspire a diverse community of learners to embrace curiosity, foster innovation, and develop a strong sense of social responsibility, ultimately contributing to a better world for future generations.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">Over Mission</h1>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="mb-3">
                                    Sharif Education Complex is committed to nurturing intellectually capable, creative, and ethically grounded individuals who will contribute wisdom, compassion, and leadership to a global society. Our mission goes beyond academic excellence; we strive to foster a vibrant learning environment that encourages critical thinking, innovation, and a passion for lifelong learning. We believe in the holistic development of our students, emphasizing personal growth, ethical values, and responsible citizenship. By providing diverse educational experiences and promoting community engagement, we prepare our students to navigate an ever-changing world and make meaningful contributions to society.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@endsection