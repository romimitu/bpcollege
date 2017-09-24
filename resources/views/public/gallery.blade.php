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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / ফটো গ্যালারি</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">					
					@include('layouts.sidebar')
					<div class="department-section">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="department-section" id="full-width-page">
									<div class="department-overview">
										<h2>Gallery</h2>
										<ul class="live-campus-ul gallery-ul photos-ul">
										@foreach($photos as $photo)
											<li>
												<a href="/{{$photo->image}}" data-rel="gallery[all]" title="{{$photo->title}}">
													<img src="{{$photo->image}}">
												</a>
											</li>
										@endforeach
										</ul>
									</div><!-- End .department-overview -->
								</div><!-- End .department-section -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
