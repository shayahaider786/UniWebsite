@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Career</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          
                <div class="mb-3">
                    <label for="title" class="form-label"><strong>Title:</strong></label>
                    <input 
                        type="text" 
                        name="title" 
                        class="form-control @error('title') is-invalid @enderror" 
                        id="title" 
                        placeholder="Title">
                    @error('title')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
          
                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Short Description:</strong></label>
                    <textarea 
                        class="form-control @error('short_description') is-invalid @enderror" 
                        style="height:150px" 
                        name="short_description" 
                        id="inputDetail" 
                        placeholder="Short Description"></textarea>
                    @error('short_description')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Long Description:</strong></label>
                    <textarea 
                        class="form-control @error('long_description') is-invalid @enderror" 
                        style="height:150px" 
                        name="long_description" 
                        id="inputDetail" 
                        placeholder="Long Description"></textarea>
                    @error('long_description')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
        
        
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>
         
        </div>
    </div>
</div>
@endsection