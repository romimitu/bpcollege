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
                    <h1>College Staff</h1>
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
                                <span class="caption-subject font-dark sbold uppercase">College Staff</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="/member/create"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Add New Member</label></a>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">                             
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table mb0"> 
                                <thead>
                                    <tr> 
                                        <th class="col-md-1">SL</th>
                                        <th class="col-md-2">name</th>
                                        <th class="col-md-1">ID No.</th>
                                        <th class="col-md-2">Designation</th>
                                        <th class="col-md-2">Contact Details</th>
                                        <th class="col-md-2">image</th>
                                        <th class="col-md-2" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($members as $member)
                                    <tr> 
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->idno }}</td>
                                        <td>{{ $member->position }}</td>
                                        <td>{{ $member->contact_details }}</td>
                                        <td><img src="/{{ $member->image }}" class="img-responsive" alt=""></td>
                                        <td class="align-middle">
                                            <a class="btn btn-sm btn-primary" href="{{ url('/member/'.$member->id.'/edit') }}">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            {!! Form::open([ 'method' => 'Delete', 'url' => ['/member', $member->id]]) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection