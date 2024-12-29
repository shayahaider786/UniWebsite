@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Events</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Events</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4 text-center">Events</h1>
                        {{-- <div class="row">
                            @forelse ($administrations as $administration)
                                <div class="administrationBox text-center col-md-4 mt-5">
                                    <img src="/images/{{ $administration->image }}" width="100%" class="rounded" height="350px" alt="imag">
                                    <h4 class="mt-2">{{$administration->name}}</h4>
                                    <a href="{{ route('administrationPerson', $administration->slug) }}">Read More</a>
                                </div>
                            @empty
                            <p>There are no Administration</p>
                            @endforelse
                        </div> --}}

                        <div class="row">
                            @forelse ($events as $event)
                                <div class="col-md-4 mb-4 pt-3"> <!-- Adjust size as per your design -->
                                    <a href="{{route('eventsById' , $event->id)}}">
                                        <div class="card">
                                            <img src="{{ $event->image_urls[0] }}" class="card-img-top" alt="Event Image" height="300px">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $event->name }}</h5>
                                                <p class="card-text text-dark">{{ Str::limit($event->description, 40) }}</p>
                                                <div class=" d-flex justify-content-between">
                                                    <p class="text-secondary"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</p>
                                                    <p class="text-secondary"><strong>Time:</strong> {{ \Carbon\Carbon::parse($event->event_time)->format('h:i A') }}</p> <!-- Format for 12-hour time with AM/PM -->                                            
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @empty
                                <p>There are no event</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



@endsection