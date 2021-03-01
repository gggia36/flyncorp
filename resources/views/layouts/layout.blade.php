<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>flyncorp</title>
	<!-- Bootstrap 5 -->
	<link href="{{asset('assets/bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

@include('web.layouts.header')

<main class="">
@yield('content')
@yield('modal')
</main>
@include('web.layouts.footer')


<script src="{{asset('assets/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>