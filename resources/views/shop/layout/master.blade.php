<!DOCTYPE html>
<html lang="en">

<head>
	@include('shop.layout.head')
</head>

<body>
	<header>
		@include('shop.layout.navbar')	
		@include('shop.layout.banner')		
	</header>
	
	<section class="content container">
		<div class="row">
			@include('shop.layout.sidebar')			
			@yield('content')
		</div> <!-- /.row -->
		<hr>		
	</section> <!-- /.main -->

	@include('shop.layout.footer')
	@include('shop.layout.script')
</body>

</html>
