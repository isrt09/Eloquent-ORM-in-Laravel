<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel Framework</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<header style="background-color: #888; padding: 20px; color:#FFF; text-align: center;">
		<h3>@yield('title','Home')</h3>
	</header>
	@yield('content')
	<footer style="background-color: #000; padding: 20px; color:#FFF; text-align: center;">
		<span>Copyright &copy;2021 All Rights Reserved</span>
	</footer>
</body>
</html>