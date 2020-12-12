@extends('layouts.sms')
@section('content')<div class="app-main__outer">
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Form Layouts
                    <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            <div class="btn-actions-pane-left">
                                <div class="nav">

                                    @php
                                        $i=0;
                                    @endphp

                                    @foreach ($grades as $grade)

                                <a data-toggle="tab" href="#tab-eg2-{{$grade->id}}" class="btn-pill btn-wide m-1 btn btn-outline-alternate btn-sm show
                                    <?php
                                        if($i==0){
                                            print("active");
                                        }
                                        $i++;
                                    ?>
                                    ">{{$grade->name}}</a>

                                    @endforeach
                                    <!--

                                    <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide btn btn-outline-alternate btn-sm show">Tab 3</a>
                                    -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <?php
                                $i=0;
                                ?>
                                @foreach($grades as $grade)

                                <div class="tab-pane show  <?php if($i==0){print("active");$i++;}?>" id="tab-eg2-{{$grade->id}}" role="tabpanel">

                                    <div class="card-header">
                                        {{$grade->name}} Students
                                        <div class="btn-actions-pane-right">
                                            <div class="nav">
                                                <button class="btn btn-success">Generate {{$grade->name}} Marks Sheet</button>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($grade->students as $student)

                                        <div class="m-1 mt-3 card text-center col-md-4 col-lg-3" style="float:left;">
                                            <div class="card-body">
                                                <img src="assets/images/avatars/1.png" alt="" srcset="">
                                                <br><br>
                                                <h5 class="card-title">{{$student->full_name}}</h5>
                                                <p class="text-left">
                                                    Index : <b>{{$student->index}}</b>
                                                    <br>
                                                    Full Name : <b>{{$student->full_name}}</b>
                                                    <br>
                                                    Grade : <b>{{$grade->name}}</b>
                                                    <br>
                                                    Town/Village : <b>{{$student->town}}</b>
                                                    <br>
                                                    Date of Birth : <b>{{$student->dob}}</b>
                                                    <br>
                                                    Birth Certificate Num : <b>{{$student->bc_num}}</b>
                                                    <br>
                                                    Parent : <b>{{$student->parent_name}}</b>
                                                    <br>
                                                    Contact : <b>{{$student->parent_contact}}</b>
                                                </p>
                                                <br>
                                                <button class="btn btn-warning">Edit Profile</button>
                                            </div>
                                        </div>
                                    @endforeach
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

@endsection