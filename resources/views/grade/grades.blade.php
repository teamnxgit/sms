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
                <div>Grades
                    <div class="page-title-subheading">List of Grades/Classes
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <a href="/grades/new" class="btn-shadow mr-3 btn btn-dark">
                    New Grade/Class
                </a>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="card-header">
                                    Grades/Classes
                                    <div class="btn-actions-pane-right">
                                        <div class="nav">
                                            <button class="btn btn-success">Students Population Report</button>
                                        </div>
                                    </div>
                                </div>
                                    @foreach($grades as $grade)
                                        <div class="mt-3 m-3 card bg-light text-center col-md-4 col-lg-3" style="float:left;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$grade->name}}</h5>
                                                <p class="text-left">
                                                    Students population : <b>{{$grade->count_students()}}</b>
                                                </p>
                                                <br>
                                                {!! Form::open(['url' => '/grades/edit/']) !!}
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="grade_id" value="{{$grade->id}}">
                                                    <button type="submit" class="btn btn-warning m-2">Edit</button>
                                                {!! Form::close() !!}

                                                {!! Form::open(['url' => '/grades/remove/']) !!}
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="grade_id" value="{{$grade->id}}">
                                                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
