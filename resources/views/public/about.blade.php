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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / ইতিহাস</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					<div class="department-section">
					<!-- Banner Image -->
						<img src="images/overview.jpg" class="banner-image">						
					<!-- Banner Image End -->
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>ইতিহাস</h2>
							<p>বিনোদপুর উচ্চ বিদ্যালয়ের প্রাক্তন প্রধান শিক্ষক মরহুম আব্দুস শরীফ উচ্চ শিক্ষা গ্রহন থেকে বঞ্চিত অত্র এলাকার শিক্ষার্থীদের কথা ভেবে মাঝে মধ্যে বলতেন- “বিনোদপুরে একটি কলেজ হবে”। তাঁর এই উক্তি ক্রমেই অত্র এলাকার মানুষের অন্তরে দানা বেঁধে উঠে এবং ১৯৮৬ সালের ২৬ শে জুলাই কলেজ তৈরির উদ্দেশ্যে বিরাট জনসমাবেশে তা প্রতিফলন ঘটে। সিদ্ধান্ত হয় বিনোদপুর কলেজ প্রতিষ্ঠার। শুরু হয় কলেজের যাবতীয় কার্যক্রম এবং ০১/০৬/১৯৮৮ সালে কলেজটি এমপিও ভুক্ত হয়। সর্বস্তরের জনগনের সাহায্যে গড়ে উঠা কলেজটি ১৯৯৫ সালে ডিগ্রীতে উন্নীত হয়। বর্তমানে এ কলেজের নাম বিনোদপুন কলেজ।</p>
						</div><!-- End .department-overview -->
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
@endsection