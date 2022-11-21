<!DOCTYPE html>
<html lang="en">
<head>
	<title>JBJRL</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('img/sneakerlogo.png') }}" >
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7bdd8c7561.js" crossorigin="anonymous"></script>
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">


	</head>

    
<body>
    @include('layout.header')
    @yield('contents')
    @include('layout.footer')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
   <!-- popper -->
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <!-- jQuery easing -->
   <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>