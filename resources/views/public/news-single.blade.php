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
			<div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / নিউজ ও ইভেন্টস</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					<div class="department-section">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>নিউজ ও ইভেন্টস</h2>
							<h3 class="news-detail-headline">{{$news->title}}</h3>
							<h4 class="news-detail-date">Date: {{$news->created_at->format('j M y')}}</h4>
							{!!$news->description!!}
						</div><!-- End .department-overview -->
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
<style type="text/css">
#department #department-container .department-side-nav > ul > li.announcement_sub{height: auto; opacity: 1; display: block;}
</style>
@endsection