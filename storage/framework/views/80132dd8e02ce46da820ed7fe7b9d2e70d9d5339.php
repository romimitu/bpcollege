
<?php $__env->startSection('title'); ?>
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="common-banner"></div>
<div id="department">
	<div class="container">
		<div id="banner-holder" class="transparent-banner">
			<h2 id="dept-title">About Us</h2>
			<div class="breadcrumb"><a href="/overview">About Us</a> / News and Events</div>
		</div><!-- End #banner-holder -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div id="department-container">
					<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<div class="department-section">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">About Us</h2>
							<h2>News and Events</h2>
							<h3 class="news-detail-headline"><?php echo e($news->title); ?></h3>
							<h4 class="news-detail-date">Date: <?php echo e($news->created_at->format('j M y')); ?></h4>
							<?php echo $news->description; ?>

						</div><!-- End .department-overview -->
					</div><!-- End .department-section -->
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
<style type="text/css">
#department #department-container .department-side-nav > ul > li.announcement_sub{height: auto; opacity: 1; display: block;}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>