@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Administration</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Administration</li>
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
                        <h1 class="mb-4 text-center">Administration</h1>
                        <div class="row">
                            @forelse ($administrations as $administration)
                            {{-- todo vertical administration  --}}
                                <div class="administrationBox col-md-12 mt-5 d-flex justify-content-start">
                                    <div class="w-25">
                                        <img src="/images/{{ $administration->image }}" width="90%" class="rounded" height="250px" alt="imag">
                                    </div>
                                    <div class="w-75">
                                        <h4 class="">{{$administration->name}}</h4>
                                        <p class="alignPara">{{ $administration->detail }}</p>
                                    </div>
                                </div>

                               {{-- <div class="administrationBox text-center col-md-4 mt-5">
                                    <img src="/images/{{ $administration->image }}" width="100%" class="rounded" height="350px" alt="imag">
                                    <h4 class="mt-2">{{$administration->name}}</h4>
                                    <p class="">{{ $administration->detail }}</p>
                                </div> --}}
                            @empty
                            <p>There are no Administration</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->





        {{-- <div class="administrationBox text-center col-md-4 mt-5">
            <img src="/images/{{ $administration->image }}" width="100%" class="rounded" height="350px" alt="imag">
            <h4 class="mt-2">{{$administration->name}}</h4>
            <p class="">{{ $administration->detail }}</p>
            <a href="{{ route('administrationPerson', $administration->slug) }}">Read More</a>
        </div> --}}
@endsection