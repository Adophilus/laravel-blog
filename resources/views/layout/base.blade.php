<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield("title") | Alive</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="/css/hint.min.css">
	<script type="text/javascript" src="{{asset('js/alpine.js')}}" defer></script>
</head>
<body class="bg-gray-100 font-lato selection:bg-primary">
	@include("inc.navbar")
	
	@section("content")
	@show

	@include("inc.footer")

	<div class="flex flex-col gap-y-4 fixed my-container top-4 left-0 right-0">
		@section("errors")
		@show
	</div>
</body>
</html>
