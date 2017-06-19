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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / তথ্যসমূহ</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					<div class="department-section">
						<!-- Banner Image -->
						<img src="/images/overview.jpg" class="banner-image">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>তথ্যসমূহ</h2>
							<div class="dynamic-content-holder">
								<table>
									<tbody>
										<tr>
											<td>Established</td>
											<td>:</td>
											<td>1986</td>
										</tr>
										<tr>
											<td>Area</td>
											<td>:</td>
											<td>189 hundredth</td>
										</tr>
										<tr>
											<td>Location</td>
											<td>:</td>
											<td>Binodpur, Shibgonj, Chapainawabganj</td>
										</tr>
									</tbody>
								</table>
								<h3>Degrees</h3>
								<table>
									<tbody>
										<tr>
											<td>Courses</td>
											<td>:</td>
											<td>HSC, BA, BSS, BBS</td>
										</tr>
										<tr>
											<td>Teachers</td>
											<td>:</td>
											<td>50</td>
										</tr>
										<tr>
											<td>Staff</td>
											<td>:</td>
											<td>28</td>
										</tr>
										<tr>
											<td>Students</td>
											<td>:</td>
											<td>1229</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
@endsection