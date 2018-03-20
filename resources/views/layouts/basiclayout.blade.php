<!DOCTYPE html>
<html>
<head>
	<title>School Demo</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('includes.navbar')

	<div class="container">
		@if(Request::is('/'))
			@include('includes.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('includes.errors')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('includes.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>Copyright 2018 &copy; School Demo</p>
	</footer>
</body>
</html>