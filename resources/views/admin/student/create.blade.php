@extends('layouts.admin')

@section('content')
    <div class="card">
        @include('includes.errors')
        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="card-header">
                <strong>Create Student</strong>
            </div>
            <div class="card-body card-block">
                <style>
                .no_border tr td{
                    border: 0 !important;
                }
                </style>
                <table class="table no_border">
                    <tbody>
                        <tr>
                            <td width="250px">Name</td>
                            <td><input type="text" name="name" class="form-control" value="{{ old('name') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Email</td>
                            <td><input type="email" name="email" class="form-control" value="{{ old('email') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Password</td>
                            <td><input type="text" name="password" value="gb123456" class="form-control" value="{{ old('password') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Avatar</td>
                            <td><input type="file" name="avatar" class="form-control-file"></td>
                        </tr>
                        <tr>
                            <td width="250px">Batch</td>
                            <td><input type="text" name="batch" class="form-control" value="{{ old('batch') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Class Roll</td>
                            <td><input type="text" name="class_roll" class="form-control" value="{{ old('class_roll') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Exam Roll</td>
                            <td><input type="text" name="exam_roll" class="form-control" value="{{ old('exam_roll') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Registration No</td>
                            <td><input type="text" name="registration_no" value="GCE-" class="form-control" value="{{ old('registration_no') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Gender</td>
                            <td>
                                <select class="form-control" value="{{ old('gender') }}" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other's</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="250px">Phone No</td>
                            <td><input type="text" name="phone_no" class="form-control" value="{{ old('phone_no') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Blood Group</td>
                            <td>
                                <select class="form-control" value="{{ old('blood_group') }}" name="blood_group">
                                    <option value="">Select Blood Group</option>
                                    <option value="1">A+</option>
                                    <option value="2">A-</option>
                                    <option value="3">O+</option>
                                    <option value="4">O-</option>
                                    <option value="5">B+</option>
                                    <option value="6">B-</option>
                                    <option value="7">AB+</option>
                                    <option value="8">AB-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="250px">Religion</td>
                            <td><input type="text" name="religion" class="form-control" value="{{ old('religion') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Date of Birth</td>
                            <td><input type="date" name="dob" class="form-control" value="{{ old('dob') }}"></td>
                        </tr>
                        <tr>
                            <td width="250px">Nationality</td>
                            <td><input type="text" name="nationality" class="form-control" value="{{ old('nationality') }}"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h3>Guardian</h3></td>
                        </tr>
                        <tr>
                            <td>Guardian Name</td>
                            <td><input type="text" name="guardian_name" class="form-control" value="{{ old('guardian_name') }}"></td>
                        </tr>
                        <tr>
                            <td>Guardian Contact</td>
                            <td><input type="text" name="guardian_contact" class="form-control" value="{{ old('guardian_contact') }}"></td>
                        </tr>
                        <tr>
                            <td>Guardian Relationship</td>
                            <td><input type="text" name="relationship" class="form-control" value="{{ old('relationship') }}"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h3>Present Address</h3></td>
                        </tr>
                        <tr>
                            <td>Village</td>
                            <td><input type="text" name="present_village" class="form-control" value="{{ old('present_village') }}"></td>
                        </tr>
                        <tr>
                            <td>Post Office</td>
                            <td><input type="text" name="present_post_office" class="form-control" value="{{ old('present_post_office') }}"></td>
                        </tr>
                        <tr>
                            <td>Post Code</td>
                            <td><input type="text" name="present_post_code" class="form-control" value="{{ old('present_post_code') }}"></td>
                        </tr>
                        <tr>
                            <td>Upazila</td>
                            <td><input type="text" name="present_upazila" class="form-control" value="{{ old('present_upazila') }}"></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><input type="text" name="present_district" class="form-control" value="{{ old('present_district') }}"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h3>Permanet Address</h3></td>
                        </tr>
                        <tr>
                            <td>Village</td>
                            <td><input type="text" name="permanent_village" class="form-control" value="{{ old('permanent_village') }}"></td>
                        </tr>
                        <tr>
                            <td>Post Office</td>
                            <td><input type="text" name="permanent_post_office" class="form-control" value="{{ old('permanent_post_office') }}"></td>
                        </tr>
                        <tr>
                            <td>Post Code</td>
                            <td><input type="text" name="permanent_post_code" class="form-control" value="{{ old('permanent_post_code') }}"></td>
                        </tr>
                        <tr>
                            <td>Upazila</td>
                            <td><input type="text" name="permanent_upazila" class="form-control" value="{{ old('permanent_upazila') }}"></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><input type="text" name="permanent_district" class="form-control" value="{{ old('permanent_district') }}"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><h3>Educational Qualification</h3></td>
                        </tr>
                        <tr>
                            <table class="table table-bordered">
                                <thead>
                                    <th>Examination</th>
                                    <th>Board</th>
                                    <th>Institute</th>
                                    <th>Group</th>
                                    <th>Passing Year</th>
                                    <th>Roll</th>
                                    <th>Result</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SSC</td>
                                        <td><input type="text" name="ssc_board" class="form-control" value="{{ old('ssc_board') }}"></td>
                                        <td><input type="text" name="ssc_institute" class="form-control" value="{{ old('ssc_institute') }}"></td>
                                        <td><input type="text" name="ssc_group" class="form-control" value="{{ old('ssc_group') }}"></td>
                                        <td><input type="text" name="ssc_year" class="form-control" value="{{ old('ssc_year') }}"></td>
                                        <td><input type="text" name="ssc_roll" class="form-control" value="{{ old('ssc_roll') }}"></td>
                                        <td><input type="text" name="ssc_result" class="form-control" value="{{ old('ssc_result') }}"></td>
                                    </tr>
                                    <tr>
                                        <td>HSC</td>
                                        <td><input type="text" name="hsc_board" class="form-control" value="{{ old('hsc_board') }}"></td>
                                        <td><input type="text" name="hsc_institute" class="form-control" value="{{ old('hsc_institute') }}"></td>
                                        <td><input type="text" name="hsc_group" class="form-control" value="{{ old('hsc_group') }}"></td>
                                        <td><input type="text" name="hsc_year" class="form-control" value="{{ old('hsc_year') }}"></td>
                                        <td><input type="text" name="hsc_roll" class="form-control" value="{{ old('hsc_roll') }}"></td>
                                        <td><input type="text" name="hsc_result" class="form-control" value="{{ old('hsc_result') }}"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm pull-right">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm pull-left">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
@endsection