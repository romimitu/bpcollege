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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / যোগাযোগ</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					
					<div class="department-section">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">About Us</h2>
							<h2>Contact Us</h2>
							<div class="contact_address_container">
								<img src="../images/logo.png">
								<ul>
									<li><strong>Binodpur College</strong></li>
									<li>Binodpur-kansat Road, Lachmanpur, Binodpur,</li>
									<li>Shibgonj, Chapainawabganj, 6342</li>
									<li><strong>Phone : </strong>017xxxxxx</li>
									<li><strong>Website : </strong>www.bdcsc.edu.bd</li>
									<li><strong>E-mail : </strong>info@bdcsc.edu.bd</li>
								</ul>
							</div>
							<div class="contact_address_container">
								<h2 class="send-enquiry-label">Send Enquiry</h2>
								<form action="#" method="POST" id="contact-us">
									<div class="write  hide-content">
										<ul class="main-ul">
											<li>
												<ul>
													<li><input type="text" name="fname" placeholder="First Name" data-msg-required="Please enter your first name." required></li>
													<li><input type="text" name="lname" placeholder="Last Name" data-msg-required="Please enter your Last name." required></li>
												</ul>
											</li>
											<li>
												<ul>
													<li><input type="text" name="mobile" placeholder="mobile" data-msg-required="Please enter your mobile number." required></li>
													<li><input type="email" name="email" placeholder="Email" data-msg-required="Please enter your email." required></li>
												</ul>
											</li>
											<li><textarea name="text" placeholder="Type your message here..." data-msg-required="Please enter your text." required></textarea></li>
										</ul>
										<input type="submit" value="SUBMIT" name="submit">
									</div>
								</form>
							</div>
						</div><!-- End .department-overview -->
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
@endsection