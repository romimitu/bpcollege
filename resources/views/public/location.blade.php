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
		    <div class="breadcrumb"><a href="/overview">আমাদের সম্পর্কে</a> / অবস্থান, মানচিত্র এবং দিকনির্দেশনা</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					@include('layouts.sidebar')
					<div class="department-section">					
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>অবস্থান, মানচিত্র এবং দিকনির্দেশনা</h2>
							<div id="overlay" class="map">
							  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115952.99260980298!2d88.03977474803787!3d24.74297602695677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc2b0fe77b54198a!2sBinodpur+College!5e0!3m2!1sen!2s!4v1497804357169" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							 </div>
						</div><!-- End .department-overview -->
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->

<style>
    .scrolloff {
        pointer-events: none;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('#map').addClass('scrolloff');                
        
        $('#overlay').on("mouseup",function(){          
            $('#map').addClass('scrolloff'); 
        });
        $('#overlay').on("mousedown",function(){        
            $('#map').removeClass('scrolloff');
        });
        $("#map").mouseleave(function () {              
            $('#map').addClass('scrolloff');            
        });
    });
</script>
@endsection