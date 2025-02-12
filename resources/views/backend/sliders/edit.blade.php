@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Slider</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <!-- Edit Form -->
            <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="form-group">
                    <label for="title"><strong>Title:</strong></label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        value="{{ old('title', $slider->title) }}" 
                        placeholder="Enter slider title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Paragraph -->
                <div class="form-group">
                    <label for="paragraph"><strong>Paragraph:</strong></label>
                    <textarea 
                        name="paragraph" 
                        id="paragraph" 
                        class="form-control @error('paragraph') is-invalid @enderror" 
                        rows="4" 
                        placeholder="Enter slider paragraph">{{ old('paragraph', $slider->paragraph) }}</textarea>
                    @error('paragraph')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Link -->
                <div class="form-group">
                    <label for="link"><strong>Link:</strong></label>
                    <input 
                        type="url" 
                        name="link" 
                        id="link" 
                        class="form-control @error('link') is-invalid @enderror" 
                        value="{{ old('link', $slider->link) }}" 
                        placeholder="Enter slider link">
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button Name -->
                <div class="form-group">
                    <label for="button_name"><strong>Button Name:</strong></label>
                    <input 
                        type="text" 
                        name="button_name" 
                        id="button_name" 
                        class="form-control @error('button_name') is-invalid @enderror" 
                        value="{{ old('button_name', $slider->button_name) }}" 
                        placeholder="Enter button name">
                    @error('button_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image"><strong>Image:</strong></label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control-file @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mt-2">
                        <strong>Current Image:</strong><br>
                        <img src="{{ asset('/' . $slider->image) }}" alt="Current Slider Image" width="150">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Slider
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
