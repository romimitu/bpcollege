<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/bxslider.css" rel="stylesheet">
	<!-- Mobile menu -->
	<link href="/css/jquery.mmenu.all.css" type="text/css" rel="stylesheet">
	<link href="/css/prettyPhoto.css" type="text/css" rel="stylesheet">
	<link href="/css/og-grid-component.css" type="text/css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet">
	<!-- JS Min  -->
	<script src="/js/jquery-1.8.2.min.js"></script>
	<script src="/js/modernizr.min.js"></script>
</head>	
<body>	
	@include('layouts.menu')
	@yield('content')
	@include('layouts.footer')
	

	<a href="#" id="backToTop"></a>
	<!-- Bootstrap core JavaScript -->
	<script src="/js/bootstrap.js"></script>
	<script src="/js/jquery.bxslider.js" type="text/javascript"></script>
    <script src="/js/script.js"></script>
    <script src="/js/grid.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <!-- Mobile Menu -->
	<script src="/js/jquery.mmenu.min.all.js" type="text/javascript"></script>
	<script type="text/javascript">
        $('nav#menu').mmenu();
	</script>
</body>
</html>
	