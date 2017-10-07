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
                                <span class="caption-subject font-dark sbold uppercase">About Us</span>
                            </div>
                        </div>
                        <div class="portlet-body form">                             
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif


                            @foreach($abouts as $about)

                            <table class="table mb0 table-bordered">                                 
                                <tbody> 
                                    <tr>
                                        <td>collage Name</td>
                                        <td>{{ $about->collageName }}</td>
                                    </tr>
                                    <tr>
                                        <td>Established</td>
                                        <td>{{ $about->established }}</td>
                                    </tr>
                                    <tr>
                                        <td>Location/Address</td>
                                        <td>{{ $about->location }}</td>
                                    </tr>
                                    <tr>
                                        <td>Area (Land Total)</td>
                                        <td>{{ $about->area }}</td>
                                    </tr>
                                    <tr>
                                        <td>Course Name</td>
                                        <td>{{ $about->course }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Teacher</td>
                                        <td>{{ $about->teacher }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Teacher</td>
                                        <td>{{ $about->staff }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Teacher</td>
                                        <td>{{ $about->student }}</td>
                                    </tr>
                                    <tr>
                                        <td>History</td>
                                        <td>{!! $about->history !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Our Mission</td>
                                        <td>{!! $about->mission !!}</td>
                                    </tr>
                                    <tr>
                                        <td>images</td>
                                        <td>
                                            <img src="{{ $about->about_img }}" alt="" width="150px">
                                            <img src="{{ $about->mission_img }}" alt="" width="150px">
                                            <img src="{{ $about->facts_img }}" alt="" width="150px">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook Link</td>
                                        <td>{{ $about->facebook }}</td>
                                    </tr>
                                    <tr>
                                        <td>Twitter Link</td>
                                        <td>{{ $about->twitter }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $about->email }}</td>
                                    </tr>
                                    <tr> 
                                        <td>Contact No. </td>
                                        <td>{{ $about->mobile }}</td>
                                    </tr>
                                    <tr> 
                                        <td>Map</td>
                                        <td>{{ $about->map }}</td>
                                    </tr>
                                </tbody>
                            </table>  

                            <a href="{{ url('/aboutcollege/'.$about->id.'/edit') }}"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Edit About</label></a>

                            @endforeach                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection