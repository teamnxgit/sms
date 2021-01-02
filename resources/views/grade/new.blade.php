@extends('layouts.sms')
@section('content')<div class="app-main__outer">
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-building text-success">
                    </i>
                </div>
                <div>New Grade/Class
                    <div class="page-title-subheading">Fill the form to create new grade/class.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Grade/Class Details</h5>
                    {!! Form::open(['url' => '/grades/add']) !!}
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="name" class="">Name</label>
                                    <input name="name" id="name" placeholder="Grade Name" type="text" class="form-control" value="{{old('name')}}">
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
