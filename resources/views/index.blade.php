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
				<div class="col-xs-12 col-sm-6 col-md-6">
					<!-- Tab panes -->
					<div id="home-tab-content" class="tab-content">
						<div class="tab-pane fade in active" id="overview">
							<!-- <h1>Overview</h1> -->
							<p>চাঁপাইনবাবগঞ্জ জেলার শিবগঞ্জ উপজেলাধীন ৮নং বিনোদপুর উনিয়নের অর্ন্তগত লছমানপুর গ্রামে বিনোদপুর কলেজ অবস্থিত। এই কলেজ ১৯৮৬ সালে স্থাপিত হয়।<br>বর্তমানে ২.৭৯ একর জমির উপর ৩টি পাঁকা ভবন, ১টি দ্বীতল ভবন এবং ২টি টিন সেট ভবন আছে। এই কলেজের চারপাশে আমবাগান এবং একটি পাঁকা রাস্তা আছে।</p>
							<a class="more" href="/overview">আরো পড়ুন </a>
						</div><!-- END .tab-pane #research -->
						<div class="tab-pane fade" id="achivements">
							<h1>অধ্যক্ষ এর কথা</h1>
							<p>Through research, academic, and various extra- curricular activities, Shahjalal University of Science & Technology faculty and students achieved many awards and recognition. </p>
							<a class="more" href="about/">আরো পড়ুন </a>
						</div><!-- END .tab-pane #achivements -->
					</div><!-- END .tab-content -->
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
		<span id="bg-tab"></span>
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
										<td>Established:</td>
										<td>1986</td>
									</tr>
									<tr>
										<td>Area:</td>
										<td>189 hundredth</td>
									</tr>
									<tr>
										<td>Location:</td>
										<td>Binodpur, Shibgonj, Chapainawabganj</td>
									</tr>
									<tr>
										<td>Courses:</td>
										<td>HSC, BA, BSS, BBS</td>
									</tr>
									<tr>
										<td>Teachers:</td>
										<td>50</td>
									</tr>
									<tr>
										<td>Staff:</td>
										<td>28</td>
									</tr>
									<tr>
										<td>Students:</td>
										<td>1229</td>
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
										<td>Established:</td>
										<td>1986</td>
									</tr>
									<tr>
										<td>Area:</td>
										<td>189 hundredth</td>
									</tr>
									<tr>
										<td>Location:</td>
										<td>Binodpur, Shibgonj, Chapainawabganj</td>
									</tr>
									<tr>
										<td>Courses:</td>
										<td>HSC, BA, BSS, BBS</td>
									</tr>
									<tr>
										<td>Teachers:</td>
										<td>50</td>
									</tr>
									<tr>
										<td>Staff:</td>
										<td>28</td>
									</tr>
									<tr>
										<td>Students:</td>
										<td>1229</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End #academics-holder -->

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