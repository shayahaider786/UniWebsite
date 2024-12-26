@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Scholarships</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Scholarships</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


         <!--school Adminsin  Start -->
         {{-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">School Section</h1>
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-bordered">
                                    <tr>
                                        <th><b>Play Group (Montessori)</b></th>
                                        <td class="text-center">General Interview</td>
                                    </tr>
                                    <tr>
                                        <th><b>Nursery To Three</b></th>
                                        <td class="text-center">Mathematics, Urdu, Eng (Objective) obtained at least 50% marks in all subjects</td>
                                    </tr>
                                    <tr>
                                        <th class="w-50"><b>Four- Matric or O Level</b></th>
                                        <td class="text-center w-50">Mathematics, Science, English, Urdu (Subjective) obtained at least 50% marks in all subjects</td>
                                    </tr>
                                  </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-4">Documents Required for Admission:</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>4 snaps (Passport size with white background)</li>
                                    <li>Copy of B.Form/smart card</li>
                                    <li>ID card copy Father & Mother</li>
                                    <li>Previous School Leaving Certificate</li>
                                    <li>Previous Result Card</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- school Adminsin End -->

         <!--school Adminsin  Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">Collage Section</h1>
                        <div class="row">
                            <div class="col-md-12 ">
                                
                                <h2 class="mb-4 text-center">Collage Scholarship Policy(1<sup>st</sup> Year)</h2>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Scholarship</th>
                                        <th class="text-center">General Policy</th>
                                    </tr>
                                    <tr>
                                        <td><b>100% Scholarship(in Tuition Fee)</b></td>
                                        <td class="text-center">90% and above</td>
                                    </tr>
                                    <tr>
                                        <td><b>75% Scholarship(in Tuition Fee)</b></td>
                                        <td class="text-center">85% and above</td>
                                    </tr>
                                    <tr>
                                        <td><b>50% Scholarship(in Tuition Fee)</b></td>
                                        <td class="text-center">80% and above</td>
                                    </tr>
                                    <tr>
                                        <td><b>25% Scholarship(in Tuition Fee)</b></td>
                                        <td class="text-center">70% and above</td>
                                    </tr>
                                   
                                  </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 wow  fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-4">Documents Required for Admission:</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>Copy of Matric Result </li>
                                    <li>8 passport size pic with blue back ground</li>
                                    <li>Father id copy </li>
                                    <li>B.form</li>
                                    <li>Character certificate</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- school Adminsin End -->


@endsection