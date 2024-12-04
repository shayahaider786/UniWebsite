@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Student</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
  
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ $student->name }}"
                        class="form-control @error('name') is-invalid @enderror" 
                        id="inputName" 
                        placeholder="Name">
                        @error('name')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Marks:</strong></label>
                    <input 
                        type="text" 
                        name="marks" 
                        value="{{ $student->marks }}"
                        class="form-control @error('marks') is-invalid @enderror" 
                        id="inputName" 
                        placeholder="Marks">
                        @error('marks')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                </div>
        
                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Description:</strong></label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        style="height:150px" 
                        name="description" 
                        id="inputDetail" 
                        placeholder="Detail">{{ $student->description }}</textarea>
                    @error('description')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputImage" class="form-label"><strong>Image:</strong></label>
                    <input 
                        type="file" 
                        name="image" 
                        class="form-control @error('image') is-invalid @enderror" 
                        id="inputImage">
                    <img src="{{ asset('storage/' . $student->image) }}" width="20%">
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
            </form>
         
        </div>
    </div>
</div>
@endsection