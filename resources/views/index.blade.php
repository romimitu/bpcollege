@extends('layouts.master')
@section('title')
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
@endsection
@section('content')
	<div id="banner-holder">
		<ul class="home-slider large-screen-slider">
			<li style="background-image: url(images/home-1472665733.jpg);"><div class="caption-container"><p> Bangabandhu   Mural, SUST</p></div></li>
			<li style="background-image: url(images/home-1464450115.jpg);"><div class="caption-container"><p>One of the prestigious universities in Bangladesh with 7 Schools, 26 Departments, and many institutes.</p></div></li>
			<li style="background-image: url(images/home-1464450101.jpg);"><div class="caption-container"><p>One of the prestigious universities in Bangladesh with 7 Schools, 26 Departments, and many institutes.</p></div></li>
			<li style="background-image: url(images/home-1461490900.jpg);"><div class="caption-container"><p>One of the prestigious universities in Bangladesh with 7 Schools, 26 Departments, and many institutes.</p></div></li>
		</ul>
		<!-- Mobile View Slider -->                   
    	<div class="home-mobile-slider">
            <ul class="slides">
            	<li><img src="images/home-1472665733.jpg" alt=""></li>
            	<li><img src="images/home-1464450115.jpg" alt=""></li>
            	<li><img src="images/home-1464450101.jpg" alt=""></li>
            	<li><img src="images/home-1461490900.jpg" alt=""></li>
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
						<li id="overview-li" class="active"><a href="#overview" data-toggle="tab"><i class="fa fa-cube"></i><h6>Overview</h6></a></li>
						<li id="achievement-li"><a href="#achivements" data-toggle="tab"><i class="fa fa-gift"></i><h6>Achievements</h6></a></li>
					</ul>
				</div><!-- End .col -->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<!-- Tab panes -->
					<div id="home-tab-content" class="tab-content">
						<div class="tab-pane fade in active" id="overview">
							<!-- <h1>Overview</h1> -->
							<p>Shahjalal University of Science and Technology (SUST) was established in 1987. The only university of its kind at that time, it started it's journey on the 13th of February 1991 with only three departments: Physics, Chemistry and Economics, 13 teachers and 205 students. It has now expanded to 7 schools, 26 departments and a number of institutes and centres. The number of teachers has grown to 487 and the students to 9262. Besides, the University has 8 affiliated medical colleges under the School of Medical Sciences with 2744 students. </p>
							<a class="more" href="about.html">Discover More</a>
						</div><!-- END .tab-pane #research -->
						<div class="tab-pane fade" id="achivements">
							<h1>Achievements</h1>
							<p>Through research, academic, and various extra- curricular activities, Shahjalal University of Science & Technology faculty and students achieved many awards and recognition. </p>
							<a class="more" href="about/achievements.html">Discover More</a>
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
				<div class="col-xs-12 col-sm-12 col-md-12">
					<ul id="schools-ul" class="large-view">
						<li class="active"><a href="#" data-id="sc-id-2" data-title="Departments from School of Applied Sciences & Technology"><i class="fa fa-book"></i><span>Applied Sciences & Technology</span></a></li>
					</ul>
					<div id="dept-list-container" class="large-view">
						<h3>Departments from School of Applied Science &amp; Technology</h3>
						<ul id="sc-id-2" class="active department-list">
							<li id="dept-1"><a href="d/arc.html"><img src="uploads/icons/architecture.png"><span>Architecture</span></a></li>
							<li id="dept-1"><a href="d/cep.html"><img src="uploads/icons/chemical-engineering.png"><span>Chemical Engineering & Polymer Science</span></a></li>
						</ul>
					</div>
					<ul id="schools-ul" class="mobile-view">
						<li class="active"><a href="#" data-id="mobile-sc-id-2" data-title="Departments from School of Applied Sciences & Technology" id="schools-a-nav-2"><i class="fa fa-book"></i><span>Applied Sciences & Technology</span></a></li>
					</ul>
					<div id="dept-list-container" class="mobile-view">
						<h3>Departments from School of Applied Science &amp; Technology</h3>
						<ul id="mobile-sc-id-2" class="active department-list">
							<li id="dept-1"><a href="d/arc/1.html"><img src="uploads/icons/architecture.png"><span>Architecture</span></a></li>
							<li id="dept-1"><a href="d/cep/2.html"><img src="uploads/icons/chemical-engineering.png"><span>Chemical Engineering & Polymer Science</span></a></li>
						</ul>
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
									<li>
										<div>
											<div class="date">
												<div>28 <span>Dec 16</span></div>
											</div>
											<div class="desc">
												
												<p>শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের ভাইস চ্যান্সেলরের নেতৃত্বে সিন্ডিকেটের প্রতিনিধি দলের মহামান্য রাষ্ট্রপতির সঙ্গে সাক্ষাৎ </p>
												<a href="about/news-and-events-detail/48.html">Read More</a>
											</div>
										</div>
									</li>
								</ul>
								<a class="more" href="about/news-and-events.html">View All News</a>
							</div>
						</li>
						<li>
							<div>
								<h2>Notice Board</h2>
								<ul class="news">
									<li>
										<div>
											<div class="date">
												<div>23 <span>Jan 17</span></div>
											</div>
											<div class="desc">
												<p>1st Year 1st Semester Orientation (2016-2017)</p>
												<a href="about/notice-board-detail/53.html">Read More</a>
											</div>
										</div>
									</li>									
								</ul>
								<a class="more" href="about/notice-board.html">View All Notices</a>
							</div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div><!-- End .col -->
			</div><!-- End .row -->
		</div><!-- End .container -->
	</div><!-- End #news-events-holder -->
@endsection