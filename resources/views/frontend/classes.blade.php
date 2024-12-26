@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Classes</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Classes</li>
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
                        <h1 class="mb-4 text-center">Classes</h1>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-junior-tab" data-bs-toggle="pill" data-bs-target="#pills-junior" type="button" role="tab" aria-controls="pills-junior" aria-selected="true">Junior School</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-prep-tab" data-bs-toggle="pill" data-bs-target="#pills-prep" type="button" role="tab" aria-controls="pills-prep" aria-selected="false">Prep School</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-senior-tab" data-bs-toggle="pill" data-bs-target="#pills-senior" type="button" role="tab" aria-controls="pills-senior" aria-selected="false">Senior School</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-smsb-tab" data-bs-toggle="pill" data-bs-target="#pills-smsb" type="button" role="tab" aria-controls="pills-smsb" aria-selected="false">SMSB</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-smsg-tab" data-bs-toggle="pill" data-bs-target="#pills-smsg" type="button" role="tab" aria-controls="pills-smsg" aria-selected="false">SMSG (Only Girls)</button>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-junior" role="tabpanel" aria-labelledby="pills-junior-tab" tabindex="0">
                                            <table class="table table-info table-bordered">
                                                <tr class="table-info">
                                                    <th>class</th>
                                                    <td>Montessori to 3</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="pills-prep" role="tabpanel" aria-labelledby="pills-prep-tab" tabindex="0">
                                            <table class="table table-info table-bordered">
                                                <tr class="table-info">
                                                    <th>class</th>
                                                    <td>4 to 7</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="pills-senior" role="tabpanel" aria-labelledby="pills-senior-tab" tabindex="0">
                                            <table class="table table-info table-bordered">
                                                <tr class="table-info">
                                                    <th>class</th>
                                                    <td>8 to 10 & O-Level</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="pills-smsb" role="tabpanel" aria-labelledby="pills-smsb-tab" tabindex="0">
                                            <table class="table table-info table-bordered">
                                                <tr class="table-info">
                                                    <th>class</th>
                                                    <td>Nur to 8</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="pills-smsg" role="tabpanel" aria-labelledby="pills-smsg-tab" tabindex="0">
                                            <table class="table table-info table-bordered">
                                                <tr class="table-info">
                                                    <th>class</th>
                                                    <td>2 to 8</td>
                                                </tr>
                                            </table>
                                        </div>
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