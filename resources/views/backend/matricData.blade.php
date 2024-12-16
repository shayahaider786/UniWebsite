@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Matric Data</h1>
        <a href="{{route('matricAdmisionExport')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Export to CSV</a>
        
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Matric Table</h6>
                </div>
              
                @session('success')
                    <div class="alert alert-success" role="alert"> {{ $value }} </div>
                @endsession
                <div class="mt-3 me-4">
                    @if($matricDatas->isEmpty())
                        {{-- <p class="text-danger float-end">No data to delete</p> --}}
                        <button type="button" class="btn btn-danger float-end" disabled>Delete All Data</button>
                    @else
                        <form action="{{ route('matricDeleteAll') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete all matric data?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-end">Delete All Data</button>
                        </form>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Class</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($matricDatas as $matricData)
                                    <tr>
                                        <td>{{ $matricData->name }}</td>
                                        <td>{{ $matricData->father_name }}</td>
                                        <td>{{ $matricData->mother_name }}</td>
                                        <td>{{ $matricData->dob }}</td>
                                        <td>{{ $matricData->class }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('matricDataShow', $matricData->id) }}"><i class="fa-solid fa-pen-to-square"></i> show</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">There are no data.</td>
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