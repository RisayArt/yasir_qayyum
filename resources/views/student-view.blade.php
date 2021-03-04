@extends('Layouts.master')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Contact Number</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->father_name}}</td>
                        <td>{{$student->contact_number}}</td>
                        <td>
                            <a href="/edit-student/{{$student->id}}" class="btn btn-success">Edit</a>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">


        </div>
    </div>
</div>
@endsection
