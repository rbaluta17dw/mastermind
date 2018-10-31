<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
	<title>@yield('title')</title>
</head>
<body>

	<header>
		@include('includes.header')
	</header>
	<main role="main" class="container">
		<div class="row">
			<div class="col-sm-10">
				@yield('content')
			</div>
			<div class="col-sm-2">
				@yield('puntuaciones')
			</div>
		</div>
	</main>

	<footer class="footer">
		@include('includes.footer')
	</footer>

</body>
</html>
