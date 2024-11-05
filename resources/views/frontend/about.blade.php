@extends('frontend.layout.app')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('about')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
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
                        <h1 class="mb-4 text-center">History of the Institution</h1>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <p class="mb-3 alignPara">
                                    Founded in 1998, SEC has a legacy of delivering quality education and fostering a supportive learning environment. We continually evolve to meet the educational needs of our community, ensuring students have access to excellent resources and guidance. Our school aims to cultivate a passion for lifelong learning, preparing students for both academic and personal success.                                </p>
                                <p class="mb-3 alignPara">
                                    In addition to our national affiliations, SEC has also partnered with the British Council. This international affiliation enables us to provide students with access to globally recognized programs, opening doors to educational and career opportunities beyond local boundaries. The British Council affiliation underscores our commitment to a well-rounded education that prepares students to thrive in a globalized world.
                                </p>
                                <p class="mb-3 alignPara">
                                    At SEC, our teaching staff is dedicated to creating an environment where every student feels valued and supported. Our educators are not only highly qualified but also passionate about making a difference in their students' lives. We believe that with the right guidance and encouragement, each student can unlock their potential and achieve their dreams.
                                </p>
                                <p class="mb-3 alignPara">
                                    Parents are considered essential partners in the SEC community. We maintain open lines of communication with families and encourage parental involvement in school events and activities. This partnership between school and home plays a crucial role in supporting each student's journey toward academic and personal growth.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-3 alignPara">
                                    As an institution, SEC is proudly affiliated with the Board of Intermediate & Secondary Education in Lahore. This affiliation allows us to offer a curriculum that aligns with national standards and ensures that our students are well-prepared for examinations at both intermediate and secondary levels. Through this partnership, we maintain a high standard of education, aiming to bring out the best in each of our students.
                                </p>
                                <p class="mb-3 alignPara">
                                    We offer a variety of programs and extracurricular activities designed to nurture the diverse talents and interests of our students. From academic clubs to sports teams, SEC provides opportunities for students to develop skills that go beyond the classroom. These activities help students build confidence, teamwork skills, and resilience, which are essential for their future endeavors.
                                </p>
                                
                                <p class="mb-3 alignPara">
                                    Our school is also committed to staying at the forefront of educational innovation. We incorporate modern teaching methods and technology in our classrooms to enhance the learning experience. By blending traditional values with modern practices, SEC ensures that students receive a balanced education that prepares them for the challenges of the 21st century.
                                </p>
                                <p class="mb-3 alignPara">
                                    Looking to the future, SEC remains dedicated to expanding its impact and continuing its mission of educational excellence. We aspire to nurture generations of students who are not only academically accomplished but also socially responsible and globally aware. At SEC, we are building a brighter tomorrow by empowering the leaders of tomorrow.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <img class="img-fluid" src="frontend/img/assets/image1.jpg" width="100%" alt="image1">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection