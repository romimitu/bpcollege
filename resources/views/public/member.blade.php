@extends('layouts.master')
@section('title')
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
@endsection
@section('content')
<div id="common-banner"></div>
<div id="department">
	<div class="container">
		<div id="banner-holder" class="transparent-banner">
		    <h2 id="dept-title">Institute of Information and Communication Technology</h2>
		    <div class="breadcrumb"><a href="/">Academics</a> / Institutes / IICT / Faculty</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">					
					@include('layouts.sidebar')
					<div class="department-section">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="department-faculty">
									<h2 id="mobile-dept-title" class="mobile-view">Institute of Information and Communication Technology</h2>
		    						<div class="mobile-breadcrumb mobile-view"><a href="/">Academics</a> / IICT</div>		    						
									<h2>Faculty</h2>
									<ul id="og-grid" class="faculty-member og-grid">
										<li>
											<a href="#" data-largesrc="images/staff/large/" data-title="Dr Mohammad Shahidur Rahman " data-designation="Director" data-description="<h3 class=contact-info-h3>Contact Information:</h3>
												<ul class=contact-info-ul>
													<li>Phone: /254/ 713582</li><li>Email: rahmanms@sust.edu</li>
												</ul>">
												<div class="staff-thumb">
													<img src="../../../uploads/profile-images/institute-office-1463005061.jpg" class="img-responsive" alt=""/>
													<span><i></i></span>
												</div>
												<h4>Dr Mohammad Shahidur Rahman  <span class="designation">Director</span></h4>
											</a>
										</li>
									</ul>
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
