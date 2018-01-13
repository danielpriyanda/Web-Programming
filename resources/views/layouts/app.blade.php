<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{URL::TO('/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::TO('/css/font-awesome.css')}}">
	@yield('css')
</head>
<body>
	@include('partials.nav')
	@yield('content')
	@yield('footer')
	<script src="{{URL::TO('/js/jquery-3.2.1.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{URL::TO('/js/bootstrap.js')}}" type="text/javascript" charset="utf-8"></script>
</body>
</html>