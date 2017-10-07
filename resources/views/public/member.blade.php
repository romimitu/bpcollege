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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / কলেজ স্টাফ</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">					
					@include('layouts.sidebar')
					<div class="department-section">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="department-faculty">
									<ul id="og-grid" class="faculty-member og-grid">
										@foreach($teams as $team)									
										<li>
											<a href="#" data-largesrc="images/staff/large/" data-description="
												<h3 class=contact-info-h3>Contact Information: {{$team->contact_details}}</h3>
												<p>{{$team->description}}</p>
												<ul class=contact-info-ul>
													<li>ID No: {{$team->idno}}</li><li>Email: {{$team->email}}</li>
													<li>Phone: {{$team->name}}</li><li>Facebook: {{$team->facebook}}</li>
												</ul>">
												<div class="staff-thumb">
													<img src="/{{$team->image}}" class="img-responsive" alt=""/>
													<span><i></i></span>
												</div>
												<h4>{{$team->name}}  <span class="designation">{{$team->position}}</span></h4>
											</a>
										</li>
										@endforeach
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
