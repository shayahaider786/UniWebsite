@extends('frontend.layout.appTwo')

@section('content')

<!-- Page Header Start -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Event </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('events') }}">Event</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">{{ $event->name }}</li>
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
                <h1 class="mb-4 text-center">{{ $event->name }}</h1>
                <div class="text-center">
                    <!-- Display Event Images -->
                    <div class="mb-4">
                        @if ($event->images)
                            <div class="row">
                                @foreach ($event->images as $image)
                                    <div class="col-md-4 mb-3"> <!-- Each image in col-md-4 -->
                                        <img src="{{ asset('storage/' . $image) }}" alt="Event Image" class="img-fluid rounded w-100">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <!-- Display Event Description -->
                    <p class="mt-4 my-0 mx-auto w-50">{{ $event->description }}</p>

                    <!-- Display Event Date and Time -->
                    <div class="mt-4">
                        <p class="text-secondary"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                        <p class="text-secondary"><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Administration Person Details End -->

@endsection
