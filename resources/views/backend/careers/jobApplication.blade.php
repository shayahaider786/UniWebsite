@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Job Application</h1>
        {{-- <a href="{{ route('careers.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus-circle"></i> Add Career
        </a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Job Application Table</h6>
                </div>
                
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="mt-3 me-4">
                    @if($allApplications->isEmpty())
                        {{-- <p class="text-danger float-end">No data to delete</p> --}}
                        <button type="button" class="btn btn-danger float-end" disabled>Delete All Data</button>
                    @else
                        <form action="{{ route('DeleteAllJobs') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete all inter data?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-end">Delete All Data</button>
                        </form>
                    @endif
                </div>
                <!-- Table -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>CV</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allApplications as $allApplication)
                                    <tr>
                                        <td>{{ $allApplication->job_title }}</td>
                                        <td>{{ $allApplication->name }}</td>
                                        <td>
                                            @if(!empty($allApplication->cv_path))
                                                <a href="{{ asset('storage/' . $allApplication->cv_path) }}" class="btn btn-primary" download>Download CV</a>
                                            @else
                                                No CV Uploaded
                                            @endif
                                        </td>                                                                               
                                        {{-- <td>
                                            <div class="d-flex">
                                                <a href="{{ route('careers.edit', $career->id) }}" class="btn btn-sm btn-warning me-2">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('careers.destroy', $career->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this slider?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">no job applicaion found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
