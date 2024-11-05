@extends('frontend.layout.app')

@section('content')

<!-- Page Header Start -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Administration Person</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('allAdministration') }}">Administration</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ $administration->name }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Administration Person Details Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 text-center">{{ $administration->name }}</h1>
                <div class="text-center">
                    <img src="/images/{{ $administration->image }}" width="30%" class="rounded" alt="{{ $administration->name }}">
                    <p class="mt-4 my-0 mx-auto w-50">{{ $administration->detail }}</p> <!-- Assuming you have a description field -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Administration Person Details End -->

@endsection
