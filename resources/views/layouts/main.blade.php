<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Markfer — Easy marketing transfer</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="app">
		@yield('content')
	</div>
</body>
</html>
