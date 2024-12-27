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
                    @session('success')
                        <div class="alert alert-success" role="alert"> {{ $value }} </div>
                    @endsession
                    <div class="col-md-12 alignPara">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 col-sm-8 mb-3 mb-sm-0">
                                <h5 class=" text-start">{{$career->title}}</h5>
                                <p class=" text-start">{{$career->short_description}}</p>
                                <p class="text-start ">{{$career->long_description}}</p>
                                <div class="bg-light rounded">
                                    <div class="p-5">
                                        {{-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}
                                        <form method="POST" action="{{ route('jobApplication') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" name="job_title" value="{{ $career->title ?? '' }}" readonly>
                                                        <label for="job_title">Job Title</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" required>
                                                        <label for="name">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        {{-- <input type="file" class="form-control border-0" id="cv" name="cv" required> --}}
                                                        <div class="mb-3">
                                                            <label for="cv">CV</label>
                                                            {{-- <label for="formFile" class="form-label">CV</label> --}}
                                                            <input class="form-control form-control-lg" type="file" id="cv"  name="cv">
                                                          </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">Submite</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- About End -->

@endsection