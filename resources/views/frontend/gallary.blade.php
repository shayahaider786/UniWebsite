@extends('frontend.layout.appTwo')

@section('content')

<!-- Page Header Start -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">Gallary</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Gallary</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Administration Person Details Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <h1 class="mb-4 text-center">Gallary</h1>
                @foreach($gallaries as $gallary)
                    <div class="col-lg-4">
                        <a href="{{ asset('storage/' . $gallary->image_path) }}" data-lightbox="gallery" data-title="Portfolio Image">
                            <img src="{{ asset('storage/' . $gallary->image_path) }}" class="card-img-top rounded" alt="gallery Image" width="100%" height="300px">
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
</div>
<!-- Administration Person Details End -->

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true, // Allows continuous sliding
        'alwaysShowNavOnTouchDevices': true
    });
</script>

@endsection
