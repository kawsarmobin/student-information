@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Student List</strong>
        </div>
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Batch</th>
                    <th>Exam Roll</th>
                    <th>Registration No</th>
                    <th>Phone No</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @if ($students)
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->batch }}</td>
                                <td>{{ $student->exam_roll }}</td>
                                <td>{{ $student->registration_no }}</td>
                                <td>{{ $student->phone_no }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('student.show', $student->id) }}">Show</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('student.edit', $student->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger" onclick="$('#my_form').submit()" href="#">Delete</a>

                                    <form id="my_form" class="" action="{{ route('student.destroy', $student->id) }}" method="post">
                                        @csrf @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
