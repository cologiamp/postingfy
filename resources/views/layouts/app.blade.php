<!DOCTYPE html>
<html>
<head>
	<title>Postingfy</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
	<nav class="p-6 bg-white flex justify-between mb-6">
		<ul class="flex items-center">
			<li>
				<a class="p-3" href="">Home</a>
			</li>
			<li>
				<a class="p-3" href="">Dashboard</a>
			</li>
			<li>
				<a class="p-3" href="">Post</a>
			</li>				
			
		</ul>

		<ul class="flex items-center">
			<li>
				<a class="p-3" href="">Ignacio Giampaoli</a>
			</li>
			<li>
				<a class="p-3" href="">Login</a>
			</li>
			<li>
				<a class="p-3" href="">Register</a>
			</li>
			<li>
				<a class="p-3" href="">Logout</a>
			</li>							
			
		</ul>
	</nav>
	@yield('content')
</body>
</html>