@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallary</h1>
        {{-- <a href="{{route('categories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Categories</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Gallary</h6>
                </div>
                @session('success')
                    <div class="alert alert-success" role="alert"> {{ $value }} </div>
                @endsession
                <div class="card-body">
                    <form action="{{ route('gallaryStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="images">Select Images:</label>
                                <input type="file" name="images[]" id="images" multiple class="form-control" required>
                                @error('images.*')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Upload Portfolio Items</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($gallaries as $gallary)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="position-relative">
                                    <img src="{{ asset('storage/' . $gallary->image_path) }}" class="card-img-top object-fit-cover" alt="Portfolio Image" width="100%" height="300px">
                                    <a class="position-absolute top-0 end-0 bg-dark py-1 px-2 rounded-circle text-danger">
                                        <form action="{{ route('gallaryDestroy', $gallary->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0 m-0">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </a>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection