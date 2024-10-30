@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Administration</h1>
        <a href="{{route('administration.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Administration</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Administration Table</h6>
                </div>
                @session('success')
                    <div class="alert alert-success" role="alert"> {{ $value }} </div>
                @endsession
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($administrations as $administration)
                <tr>
                    <td><img src="/images/{{ $administration->image }}" width="100px"></td>
                    <td>{{ $administration->name }}</td>
                    <td>{{ $administration->detail }}</td>
                    <td>
                        <form action="{{ route('administration.destroy', $administration->id) }}" method="POST">  
                            <a class="btn btn-primary btn-sm" href="{{ route('administration.edit', $administration->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
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