@extends('frontend.layout.appTwo')

@section('content')
<!-- Page Header Start -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Intermediate Admission Form</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('howToApply') }}">How To Apply</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Admission Form</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Form Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 text-center">Intermediate Admission Form</h1>
                @session('success')
                    <div class="alert alert-success" role="alert"> {{ $value }} </div>
                @endsession
                <div class="bg-light rounded p-5">
                    <form action="{{ route('interAdmisionStore') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" name="name" placeholder="Name" required>
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="fname" name="father_name" placeholder="Father Name" required>
                                    <label for="fname">Father Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="mname" name="mother_name" placeholder="Mother Name" required>
                                    <label for="mname">Mother Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0" id="dob" name="dob" placeholder="Date Of Birth" required>
                                    <label for="dob">Date Of Birth <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="address" name="address" placeholder="Address" required>
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="class" name="class" placeholder="Class" required>
                                    <label for="class">Class <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="bform" name="bform" placeholder="B-Form">
                                    <label for="bform">B-Form (if Applicable) <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="gender" name="gender" placeholder="Gender" required>
                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="religion" name="religion" placeholder="Religion" required>
                                    <label for="religion">Religion <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="city" name="city" placeholder="City" required>
                                    <label for="city">City <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="province" name="province" placeholder="Province" required>
                                    <label for="province">Province <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="matricRollNo" name="matricRollNo" placeholder="Province" required>
                                    <label for="matricRollNo">Matric Roll No <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="matricObtain" name="matricObtain" placeholder="Province" required>
                                    <label for="matricObtain">Matric Obtained Marks <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="matricTotal" name="matricTotal" placeholder="Province" required>
                                    <label for="matricTotal">Matric Total Marks <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="contact" name="contact" placeholder="Contact No" required>
                                    <label for="contact">Contact No <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="gcontact" name="guardian_contact" placeholder="Guardian Contact No" required>
                                    <label for="gcontact">Guardian Contact No <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-25 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
@endsection
