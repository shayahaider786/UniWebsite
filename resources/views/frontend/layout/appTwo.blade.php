<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="frontend/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/mediaQuery.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg backgrounNav navbar-dark px-4 px-lg-5 py-lg-0">
            <a href="{{route('index')}}" class="navbar-brand w-25">
                {{-- <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1> --}}
              <img src="/frontend/img/assets/logo3.png" alt="logo" class="logoImg">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::routeIs('index') ? 'active' : '' }}">Home</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::routeIs('about', 'principalMessage', 'missionVission', 'allAdministration', 'facilities', 'trustees') ? 'active' : '' }}" href="{{ route('about') }}">
                            About
                        </a>   
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('principalMessage') }}" class="dropdown-item {{ Request::routeIs('principalMessage') ? 'active' : '' }}">Principal Message</a>
                            <a href="{{ route('missionVission') }}" class="dropdown-item {{ Request::routeIs('missionVission') ? 'active' : '' }}">Vision & Mission</a>
                            <a href="{{ route('allAdministration') }}" class="dropdown-item {{ Request::routeIs('allAdministration') ? 'active' : '' }}">Administration</a>
                            <a href="{{ route('facilities') }}" class="dropdown-item {{ Request::routeIs('facilities') ? 'active' : '' }}">Facilities</a>
                            <a href="{{ route('trustees') }}" class="dropdown-item {{ Request::routeIs('trustees') ? 'active' : '' }}">Trustees</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('admisionPolicy', 'classes', 'howToApply', 'systemExam') ? 'active' : '' }}" data-bs-toggle="dropdown">Admission</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('admisionPolicy') }}" class="dropdown-item {{ Request::routeIs('admisionPolicy') ? 'active' : '' }}">Admission Policy</a>
                            <a href="{{ route('scholarship') }}" class="dropdown-item {{ Request::routeIs('scholarship') ? 'active' : '' }}">Scholarships</a>
                            <a href="{{ route('classes') }}" class="dropdown-item {{ Request::routeIs('classes') ? 'active' : '' }}">Classes</a>
                            <a href="{{ route('howToApply') }}" class="dropdown-item {{ Request::routeIs('howToApply') ? 'active' : '' }}">How to Apply</a>
                            <a href="{{ route('systemExam') }}" class="dropdown-item {{ Request::routeIs('systemExam') ? 'active' : '' }}">System Of Examination</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs('studentStar', 'studentTiming') ? 'active' : '' }}" data-bs-toggle="dropdown">Student</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="{{ route('studentStar') }}" class="dropdown-item {{ Request::routeIs('studentStar') ? 'active' : '' }}">Shining Stars</a>
                            <a href="{{ route('studentTiming') }}" class="dropdown-item {{ Request::routeIs('studentTiming') ? 'active' : '' }}">Timings</a>
                        </div>
                    </div>
                    <a href="{{ route('feeStructure') }}" class="nav-item nav-link {{ Request::routeIs('feeStructure') ? 'active' : '' }}">Fee Structure</a>
                    <a href="{{ route('allGallary') }}" class="nav-item nav-link {{ Request::routeIs('allGallary') ? 'active' : '' }}">Gallery</a>
                    <a href="{{ route('allCareer') }}" class="nav-item nav-link {{ Request::routeIs('allCareer') ? 'active' : '' }}">Career</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                    
                </div>
                {{-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a> --}}
            </div>
        </nav>
        <!-- Navbar End -->


        @yield('content')


        <!-- Footer Start -->
        <div class="container-fluid backgrounNav text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sharif Complex, Jati Umrah, <span class="ms-4">Lahore</span></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>042 378 60308-10</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>hr@sharif.edu.pk</p>
                        <div class="d-flex pt-2">
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> --}}
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/SharifEducationComplex" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="{{route('about')}}">About Us</a>
                        <a class="btn btn-link text-white-50" href="{{route('contact')}}">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="{{route('admisionPolicy')}}">Admission</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img4.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img5.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img6.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img9.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img10.png" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="frontend/img/assets/img12.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        {{-- <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p> --}}
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>