@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Events</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
          
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Event Name:</strong></label>
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
                    <label for="event_date" class="form-label"><strong>Event Date:</strong></label>
                    <input 
                        type="date" 
                        name="event_date" 
                        class="form-control @error('event_date') is-invalid @enderror" 
                        id="event_date" 
                        placeholder="Event Date">
                    @error('event_date')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="event_time" class="form-label"><strong>Event Time:</strong></label>
                    <input 
                        type="time" 
                        name="event_time" 
                        class="form-control @error('event_time') is-invalid @enderror" 
                        id="event_time" 
                        placeholder="Event Time">
                    @error('event_time')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="images" class="form-label"><strong>Event Images:</strong></label>
                    <input 
                        type="file" 
                        name="images[]" 
                        class="form-control @error('images') is-invalid @enderror" 
                        id="images" multiple>
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