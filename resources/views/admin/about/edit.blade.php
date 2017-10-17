@extends('admin.layouts.master')
@section('title')
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
@endsection
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>About College</h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Edit About</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                             @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!! Form::open(['url' => ['/aboutcollege', $about->id], 'method' =>'PATCH', 'class'=>'form-horizontal','enctype'=>"multipart/form-data"]) !!}
                            <div class="form-body">
                                <div class="form-group">
                                    {!! Form::label('collageName','Collage Name',['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('collageName',isset($about->collageName) ? $about->collageName : null, ['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('location', 'Location', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('location',isset($about->location) ? $about->location : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('area', 'Area', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('area',isset($about->area) ? $about->area : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('course', 'Courses', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('course',isset($about->course) ? $about->course : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('email',isset($about->email) ? $about->email : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('mobile', 'Mobile', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('mobile',isset($about->mobile) ? $about->mobile : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('teacher', 'Total Teacher', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-2">
                                        {!! Form::text('teacher',isset($about->teacher) ? $about->teacher : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('staff', 'Total Staff', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-2">
                                        {!! Form::text('staff',isset($about->staff) ? $about->staff : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('student', 'Total Students', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-2">
                                        {!! Form::text('student',isset($about->student) ? $about->student : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('facebook', 'Facebook URL', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('facebook',isset($about->facebook) ? $about->facebook : null,['class'=> 'form-control']) !!}
                                    </div>
                                    {!! Form::label('twitter', 'twitter URL', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-4">
                                        {!! Form::text('twitter',isset($about->twitter) ? $about->twitter : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('map', 'Google Map', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::text('map',isset($about->map) ? $about->map : null,['class'=> 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('about', 'College About', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('about',isset($about->about) ? $about->about : null,['class'=> 'form-control details']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('history', 'History', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('history',isset($about->history) ? $about->history : null,['class'=> 'form-control details']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('mission', 'Mission/Vision', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('mission',isset($about->mission) ? $about->mission : null,['class'=> 'form-control details']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('principal_msg', 'Principal Message', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        {!! Form::textarea('principal_msg',isset($about->principal_msg) ? $about->principal_msg : null,['class'=> 'form-control details']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('principal_img', 'Principal Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        @if(isset($about->principal_img))
                                            <img src="/{{$about->principal_img}}" alt="" />
                                        @else
                                            <img src="http://www.placehold.it/200x150/" alt="" />
                                        @endif
                                        {!! Form::file('principal_img') !!} 
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('about_img', 'History Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        @if(isset($about->about_img))
                                            <img src="/{{$about->about_img}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/200x150/" alt="" />
                                        @endif
                                        {!! Form::file('about_img') !!} 
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('mission_img', 'Mission Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        @if(isset($about->mission_img))
                                            <img src="/{{$about->mission_img}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/200x150/" alt="" />
                                        @endif
                                        {!! Form::file('mission_img') !!} 
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('facts_img', 'Facts Page Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-md-10">
                                        @if(isset($about->facts_img))
                                            <img src="/{{$about->facts_img}}" class="img-responsive" />
                                        @else
                                            <img src="http://www.placehold.it/200x150/" alt="" />
                                        @endif
                                        {!! Form::file('facts_img') !!} 
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        {!! Form::submit('Submit ', ['class'=> 'btn green']) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection