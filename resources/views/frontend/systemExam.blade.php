@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">System Of Examination</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">System Of Examination</li>
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
                        <h1 class="mb-4 text-center">System Of Examination</h1>
                        <div class="row">
                            <div class="col-md-12  text-justify">
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Academic calendar of the SEC is divided into three Terms, (August, December, and March). </li>
                                    <li class="list-group-item">At the End of each term, Witten test are given to the Students and detailed report showing the results and overall performance of each student.</li>
                                    <li class="list-group-item">Each exam is followed by Parent- teacher Meeting to discuss the problems & performance of Students with their Parents.</li>
                                    <li class="list-group-item">Answer Scripts of Exams are also shown to the parents if they desire so.</li>
                                    <li class="list-group-item">Monthly Tests are also conducted and the Report card sent to the Parents. Parents of Week Students are called to discuss his/her problems.</li>
                                </ol>           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


@endsection