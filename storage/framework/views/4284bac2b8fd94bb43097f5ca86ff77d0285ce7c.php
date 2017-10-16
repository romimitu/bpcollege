
<?php $__env->startSection('title'); ?>
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
					<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<div class="department-section">					
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>অবস্থান, মানচিত্র এবং দিকনির্দেশনা</h2>
							<div id="overlay" class="map">
							<?php $__currentLoopData = $collegeinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							  	<?php echo $info->map; ?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>