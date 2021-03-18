<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Bootstrap modal sidebar, hide on scroll navbar, Bootstrap 5 icons" />
	<meta name="keywords" content="modal sidebar drawer, hide on scroll navbar, bootstrap 5 icons" /> -->
	<title>flyncorp</title>
	<link rel="shortcut icon" href="{{asset('assets/image/logo/logo_footer.svg')}}">

	
	<link href="{{asset('assets/bootstrap4/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('assets/vender/lightslider-master/dist/css/lightslider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fontawesom/css/all.css') }}" rel="stylesheet">
	<link href="{{asset('assets/fonts/stylesheet.css') }}" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
	<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>
<body>

@include('layouts.header')

<main class="">
@yield('content')
@yield('modal')
</main>
@include('layouts.footer')


<script src="{{asset('assets/js/jquery.min.js') }}"></script>
<script src="{{asset('assets/vender/lightslider-master/dist/js/lightslider.js')}}"></script>

<script src="js/lightslider.js"></script>
<script src="{{asset('assets/bootstrap4/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('assets/js/navbar.js') }}"></script>
<script src="{{asset('assets/js/slide.js') }}"></script>


</body>
</html>