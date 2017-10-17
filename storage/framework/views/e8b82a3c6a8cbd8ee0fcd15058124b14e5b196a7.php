
<?php $__env->startSection('title'); ?>
BINODPUR COLLEGE | Shibgonj, Chapainawabganj
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
					<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<div class="department-section">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="department-faculty">
									<ul id="og-grid" class="faculty-member og-grid">
										<?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>									
										<li>
											<a href="#" data-largesrc="images/staff/large/" data-description="
												<h3 class=contact-info-h3>Contact Information: <?php echo e($team->contact_details); ?></h3>
												<p><?php echo e($team->description); ?></p>
												<ul class=contact-info-ul>
													<li>ID No: <?php echo e($team->idno); ?></li>
													<?php if($team->email): ?>
													<li>Email: <?php echo e($team->email); ?></li>
													<?php endif; ?>
													<li>Phone: <?php echo e($team->name); ?></li>
													<?php if($team->facebook): ?>
													<li>Facebook: <?php echo e($team->facebook); ?></li>
													<?php endif; ?>
												</ul>">
												<div class="staff-thumb">
													<img src="/<?php echo e($team->image); ?>" class="img-responsive" alt=""/>
													<span><i></i></span>
												</div>
												<h4><?php echo e($team->name); ?>  <span class="designation"><?php echo e($team->position); ?></span></h4>
											</a>
										</li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>