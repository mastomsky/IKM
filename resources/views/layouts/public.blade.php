<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>{{ config('app.name') }} - @yield('title')</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		<link  href="{{ asset('/') }}landing/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>

	<body>
		<x-navbar.public :app-name="config('app.name')" :links="[]" />
		@yield('content')
		<x-script.toast />
	</body>

</html>
