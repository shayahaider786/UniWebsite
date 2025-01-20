@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
        
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Events</h1>
        <a href="{{route('events.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add Events</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- DataTales Example -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Events Table</h6>
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
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Images</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->event_date }}</td>
                                    <td>{{ $event->event_time }}</td>
                                    <td>
                                        @if ($event->images)
                                            @foreach ($event->images as $image)
                                                <img src="{{ asset('/' . $image) }}" alt="Event Image" width="50" class="mr-2">
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <a href="{{ route('events.show', $event) }}" class="btn btn-info">View</a> --}}
                                        <a href="{{ route('events.edit', $event) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection