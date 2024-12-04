@extends('backend.layouts.app')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="mb-4 text-center">Admission Details</h1>
        <div class="bg-light p-5 rounded">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $matricDatas->name }}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{ $matricDatas->father_name }}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $matricDatas->mother_name }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $matricDatas->dob }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $matricDatas->address }}</td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>{{ $matricDatas->class }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $matricDatas->gender }}</td>
                    </tr>
                    <tr>
                        <th>B-Form</th>
                        <td>{{ $matricDatas->bform }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ $matricDatas->religion }}</td>
                    </tr>
                    <tr>
                        <th>Province</th>
                        <td>{{ $matricDatas->province }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $matricDatas->city }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $matricDatas->contact }}</td>
                    </tr>
                    <tr>
                        <th>Guardian Contact</th>
                        <td>{{ $matricDatas->guardian_contact }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('matricAdmision') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
