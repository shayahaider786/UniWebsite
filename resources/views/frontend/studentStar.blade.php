@extends('frontend.layout.appTwo')

@section('content')

        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Shining Start</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Shining Start</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h2 class="text-center">Shining Stars</h2>
                <div class="row">
                    @foreach ($students as $student)
                    <div class="d-flex align-items-center justify-content-evenly mt-5">
                        <div class="w-25">
                            <img src="{{ asset('/' . $student->image) }}" width="60%" class="rounded" alt="{{ $student->name }}">
                        </div>
                        <div class="w-75">
                            <h3>{{$student->name}}</h3>
                            <p>{{$student->description}}</p>
                            <h4>Marks {{$student->marks}}</h4>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection