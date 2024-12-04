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
                        <td>{{ $interDatas->name }}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{ $interDatas->father_name }}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $interDatas->mother_name }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $interDatas->dob }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $interDatas->address }}</td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>{{ $interDatas->class }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $interDatas->gender }}</td>
                    </tr>
                    <tr>
                        <th>B-Form</th>
                        <td>{{ $interDatas->bform }}</td>
                    </tr>
                    <tr>
                        <th>Religion</th>
                        <td>{{ $interDatas->religion }}</td>
                    </tr>
                    <tr>
                        <th>Province</th>
                        <td>{{ $interDatas->province }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $interDatas->city }}</td>
                    </tr>
                    <tr>
                        <th>Matric Roll No</th>
                        <td>{{ $interDatas->matricRollNo }}</td>
                    </tr>
                    <tr>
                        <th>Matric Obtained</th>
                        <td>{{ $interDatas->matricObtain }}</td>
                    </tr>
                    <tr>
                        <th>Matric Total</th>
                        <td>{{ $interDatas->matricTotal }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $interDatas->contact }}</td>
                    </tr>
                    <tr>
                        <th>Guardian Contact</th>
                        <td>{{ $interDatas->guardian_contact }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('interAdmision') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
