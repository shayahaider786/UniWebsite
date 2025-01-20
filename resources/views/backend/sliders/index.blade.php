@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider</h1>
        <a href="{{ route('sliders.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus-circle"></i> Add Slider
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Slider Table</h6>
                </div>
                
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Table -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Paragraph</th>
                                    <th>Link</th>
                                    <th>Button Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sliders as $slider)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('/' . $slider->image) }}" alt="Slider Image" width="80%" class="img-thumbnail">
                                        </td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ Str::limit($slider->paragraph, 30) }}</td>
                                        <td>
                                            <a href="{{ $slider->link }}" target="_blank">{{ Str::limit($slider->link, 30) }}</a>
                                        </td>
                                        <td>{{ $slider->button_name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-sm btn-warning me-2">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this slider?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No sliders found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $sliders->links() }} <!-- Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
