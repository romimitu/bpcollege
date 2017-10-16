
<?php $__env->startSection('title'); ?>
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
					<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<div class="department-section">
						<!-- Banner Image -->
						<?php $__currentLoopData = $collegeinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<img src="<?php echo e($info->facts_img); ?>" class="banner-image">
						<div class="department-overview">
							<h2 id="mobile-dept-title" class="mobile-view">আমাদের সম্পর্কে</h2>
							<h2>তথ্যসমূহ</h2>
							<div class="dynamic-content-holder">
								<table>
									<tbody>
										<tr>
											<td>স্থাপিত</td>
											<td>:</td>
											<td>১৯৮৬</td>
										</tr>
										<tr>
											<td>আয়তন</td>
											<td>:</td>
											<td><?php echo e($info->area); ?></td>
										</tr>
										<tr>
											<td>অবস্থান</td>
											<td>:</td>
											<td><?php echo e($info->location); ?></td>
										</tr>
									</tbody>
								</table>
								<table>
									<tbody>
										<tr>
											<td>কোর্সসমূহ</td>
											<td>:</td>
											<td><?php echo e($info->course); ?></td>
										</tr>
										<tr>
											<td>শিক্ষক</td>
											<td>:</td>
											<td><?php echo e($info->teacher); ?></td>
										</tr>
										<tr>
											<td>অন্যান্য কর্মচারী</td>
											<td>:</td>
											<td><?php echo e($info->staff); ?></td>
										</tr>
										<tr>
											<td>ছাত্র-ছাত্রী </td>
											<td>:</td>
											<td><?php echo e($info->student); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div><!-- End #department-container -->
			</div><!-- End .col -->
		</div><!-- End .row -->
	</div><!-- End .container -->
</div><!-- End #department -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>