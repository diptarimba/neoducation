<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tab-title') | Neoducationz</title>
	
	@yield('headers')
</head>

<body>
<div id="app">
	@yield('sidebar')
	<div id="main">
    @yield('body')
	</div>
</div>
	@yield('end-script')
</body>
</html>