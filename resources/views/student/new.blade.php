@extends('layouts.sms')
@section('content')<div class="app-main__outer">
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-child text-success">
                    </i>
                </div>
                <div>New Student
                    <div class="page-title-subheading">Fill the form to add new student.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Student Details</h5>
                    {!! Form::open(['url' => '/students/add']) !!}
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="index_no" class="">Index No</label>
                                    <input name="index_no" id="index_no" placeholder="Serial Number in Admission" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="full_name" class="">Full Name</label>
                                    <input name="full_name" id="full_name" placeholder="Name in full" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="photo" class="">Photo</label>
                                    <input name="photo" id="photo" placeholder="Name in full" type="file">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="address_1" class="">Address Line 1</label>
                                    <input name="address_1" id="address_1" placeholder="#House No" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="address_2" class="">Address Line 2</label>
                                    <input name="address_2" id="address_2" placeholder="Name of Builing / House " type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="address_3" class="">Address Line 3</label>
                                    <input name="address_3" id="address_3" placeholder="Name of the Street" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="town" class="">Address Line 4</label>
                                    <input name="town" id="town" placeholder="Name of Town / Village" type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="dob" class="">Date of Birth</label>
                                    <input name="dob" id="dob" placeholder="" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="bc_num" class="">BC Number</label>
                                    <input name="bc_num" id="bc_num" placeholder="3 or 4 Digit" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="admission_date" class="">Admission Date</label>
                                    <input name="admission_date" id="admission_date" placeholder="" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="grade" class="">Grade</label>
                                    <input name="grade" id="index_no" placeholder="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <h5 class="card-title">Parent Details</h5>

                        <div class="form-row">
                            <div class="col-md-5">
                                <div class="position-relative form-group">
                                    <label for="parent_name" class="">Name of the Parent</label>
                                    <input name="parent_name" id="parent_name" placeholder="Parent / Guardian" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="position-relative form-group">
                                    <label for="parent_nic" class="">NIC</label>
                                    <input name="parent_nic" id="parent_nic" type="text" placeholder="Parent's NIC" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label for="parent_contact" class="">Contact</label>
                                    <input name="parent_contact" id="parent_contact" type="text" placeholder="Phone Number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input class="mt-2 btn btn-success" type="submit" value="Add">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
