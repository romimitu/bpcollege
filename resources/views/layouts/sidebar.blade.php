<div class="department-side-nav">
	<script>
		$( "#announcement_nav" ).click(function() {$(".announcement_sub").slideToggle(0).css({"opacity": "1", "height": "auto"}); $( "#announcement_nav" ).addClass('rotate'); });
	</script>
	<ul>
		<li class="has-sub active"><a href="/overview"><div>ইতিহাস</div></a>	</li>
		<li class="has-sub "><a href="/facts-acts"><div>তথ্যসমূহ</div></a></li>
		<li class="has-sub "><a href="/mission"><div>উদ্দেশ্য</div></a></li>
		<li class="has-sub "><a href="/location"><div>অবস্থান, মানচিত্র এবং দিকনির্দেশনা</div></a></li>
		<li class="has-sub "><a href="/notice-board"><div>নোটিশ বোর্ড</div></a></li>
		<li class="has-sub "><a href="/news-events"><div>নিউজ ও ইভেন্টস</div></a></li>
		<li class="has-sub "><a href="/contact"><div>Contact Us</div></a></li>
	</ul>
	<div id="side-nav-carousel" class="carousel slide" data-ride="carousel">
		<h4>Notice Board</h4>
		<div class="carousel-inner" id="sidebar_notice">
			@foreach($allnotice as $notice)
			<div class="item">
	            <div class="carousel-content">                
	                <a href="{{ url('notice-board', [$notice->id, make_slug($notice->title)] )}}" class="detail-a"><div><p>{{$notice->title}}</p></div></a>
	            </div>
			</div>
			@endforeach
		</div>
		<a class="left carousel-control" href="#side-nav-carousel" data-slide="prev"></a>
		<a class="right carousel-control" href="#side-nav-carousel" data-slide="next"></a>
	</div>
</div>

<script>
	$('#sidebar_notice .item:first').addClass('active');
</script>