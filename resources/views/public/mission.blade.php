@extends('layouts.master')
@section('title')
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
@endsection
@section('content')
<div id="common-banner"></div>
<div id="department">
	<div class="container">
		<div id="banner-holder" class="transparent-banner">
			<h2 id="dept-title">আমাদের সম্পর্কে</h2>
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / উদ্দেশ্য</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					<div class="department-section">
					@foreach($collegeinfo as $info)
						<img src="{{ $info->mission_img }}" class="banner-image">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>উদ্দেশ্য</h2>
						  	{!! $info->mission !!}
						</div><!-- End .department-overview -->
					@endforeach
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div>
@endsection