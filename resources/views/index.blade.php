@extends('layouts.master')
@section('title')
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
@endsection
@section('content')
	<div id="banner-holder">
		<ul class="home-slider large-screen-slider">
			<li style="background-image: url(images/slider1.jpg);"><div class="caption-container"><p> Binodpur collage</p></div></li>
			<li style="background-image: url(images/slider2.jpg);"><div class="caption-container"><p>....</p></div></li>
			<li style="background-image: url(images/slider3.jpg);"><div class="caption-container"><p>Main Building</p></div></li>
		</ul>
		<!-- Mobile View Slider -->                   
    	<div class="home-mobile-slider">
            <ul class="slides">
            	<li><img src="images/slider1.jpg" alt=""></li>
            	<li><img src="images/slider2.jpg" alt=""></li>
            	<li><img src="images/slider3.jpg" alt=""></li>
            </ul>
        </div>
        <!-- Mobile Slider End -->  
	</div><!-- End #banner-holder -->
	@foreach($collegeinfo as $info)
	<div id="wt-text-holder">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<!-- Nav tabs -->
					<ul class="tab-nav">
						<li id="overview-li" class="active"><a href="#overview" data-toggle="tab"><i class="fa fa-cube"></i><h6>আমাদের সম্পর্কে</h6></a></li>
						<li id="achievement-li"><a href="#achivements" data-toggle="tab"><i class="fa fa-gift"></i><h6>অধ্যক্ষ এর কথা</h6></a></li>
					</ul>
				</div><!-- End .col -->
				<div class="col-xs-12 col-sm-9 col-md-9">
					<!-- Tab panes -->
					<div id="home-tab-content" class="tab-content">
						<div class="tab-pane fade in active" id="overview">
							<!-- <h1>Overview</h1> -->
							{!! $info->about !!}
							<a class="more" href="/overview">আরো পড়ুন </a>
						</div><!-- END .tab-pane #research -->
						<div class="tab-pane fade" id="achivements">
							<h1>অধ্যক্ষ এর কথা</h1>
							<div class="col-sm-3">
								<img src="{{ $info->principal_img }}" alt="" class="img-responsive">
							</div>
							<div class="col-sm-9">
								{!! $info->principal_msg !!}
								<a class="more" href="about/">আরো পড়ুন </a>
							</div>
						</div><!-- END .tab-pane #achivements -->
					</div><!-- END .tab-content -->
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End #wt-text-holder -->		
	<div id="academics-holder">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">					
					<div id="dept-list-container" class="large-view">
						<h3>Binodpur Collage Facts</h3>
						<div class="dynamic-content-holder">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>স্থাপিত: </td>
										<td>১৯৮৬</td>
									</tr>
									<tr>
										<td>আয়তন: </td>
										<td>{{$info->area }}</td>
									</tr>
									<tr>
										<td>অবস্থান: </td>
										<td>{{$info->location }}</td>
									</tr>
									<tr>
										<td>কোর্সসমূহ: </td>
										<td>{{$info->course }}</td>
									</tr>
									<tr>
										<td>শিক্ষক: </td>
										<td>{{$info->teacher }}</td>
									</tr>
									<tr>
										<td>অন্যান্য কর্মচারী: </td>
										<td>{{$info->staff }}</td>
									</tr>
									<tr>
										<td>ছাত্র-ছাত্রী: </td>
										<td>{{$info->student }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div id="dept-list-container" class="mobile-view">
						<h3>Binodpur Collage Facts</h3>
						<div class="dynamic-content-holder">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>স্থাপিত: </td>
										<td>1986</td>
									</tr>
									<tr>
										<td>আয়তন: </td>
										<td>{{$info->area }}</td>
									</tr>
									<tr>
										<td>অবস্থান: </td>
										<td>{{$info->location }}</td>
									</tr>
									<tr>
										<td>কোর্সসমূহ: </td>
										<td>{{$info->course }}</td>
									</tr>
									<tr>
										<td>শিক্ষক: </td>
										<td>{{$info->teacher }}</td>
									</tr>
									<tr>
										<td>অন্যান্য কর্মচারী: </td>
										<td>{{$info->staff }}</td>
									</tr>
									<tr>
										<td>ছাত্র-ছাত্রী: </td>
										<td>{{$info->student }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End #academics-holder -->
	@endforeach
	<div id="news-events-holder">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="clearfix"></div>
					<ul id="news-events">
						<li>
							<div>
								<h2>News &amp; Events</h2>
								<ul class="news">
								@foreach($blogs as $blog)								
									<li>
										<div>
											<div class="date">
												<div>{{ $blog->created_at->format('j') }} <span>{{ $blog->created_at->format('M y') }}</span></div>
											</div>
											<div class="desc">												
												<p>{{$blog->title}}</p>
												<a href="{{ url('news-events', [$blog->id, make_slug($blog->title)] )}}">Read More</a>
											</div>
										</div>
									</li>
								@endforeach
								</ul>
								<a class="more" href="/news-events">View All News</a>
							</div>
						</li>
						<li>
							<div>
								<h2>Notice Board</h2>
								<ul class="news">								
								@foreach($allnotice as $notice)	
									<li>
										<div>
											<div class="date">
												<div>{{ $notice->created_at->format('j') }} <span>{{ $notice->created_at->format('M y') }}</span></div>
											</div>
											<div class="desc">
												<p>{{$notice->title}}</p>
												<a href="{{ url('notice-board', [$notice->id, make_slug($notice->title)] )}}">Read More</a>
											</div>
										</div>
									</li>
								@endforeach									
								</ul>
								<a class="more" href="/notice-board">View All Notices</a>
							</div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End #news-events-holder -->
@endsection