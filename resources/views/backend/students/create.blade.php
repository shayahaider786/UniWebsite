@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Studend</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="inputName" 
                        placeholder="Name">
                    @error('name')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="marks" class="form-label"><strong>Marks:</strong></label>
                    <input 
                        type="text" 
                        name="marks" 
                        class="form-control @error('marks') is-invalid @enderror" 
                        id="marks" 
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
                        placeholder="Description"></textarea>
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
                    @error('image')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
        
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>
         
        </div>
    </div>
</div>
@endsection