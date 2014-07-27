<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	{{-- CSS styles --}}
	
	{{ HTML::style('css/normalize.css'); }}
	{{ HTML::style('css/salonmanager.css'); }}
	{{ HTML::style('css/mobile.css'); }}
	{{ HTML::style('css/form.css'); }}
	
	{{-- Scripts --}}
	
	{{ HTML::script('scripts/jquery.js'); }}
	{{ HTML::script('scripts/modernizr.js'); }}
	{{ HTML::script('scripts/selectivizr-min.js'); }}
	
	{{-- Google Analytics --}}

	<title>Salon Manager App</title>
</head>

<body>

<div class="container" id="page">

	<header>
		<div id="logo"><a href="{{ url('/') }}"><h1>Salon Manager</h1></a></div>
	</header>
	
	@yield('content')
	
	<div class="group"></div>

	<footer>
	<div id="mainmenu">
		<nav class="group">
		{{-- add jquery active --}}
			<ul>
				<li>{{ HTML::link('/', "Home") }}</li>
				<li>{{ HTML::link('admin', "Admin") }}</li>
				<li>{{ HTML::link('login', "Log in") }}</li>
				<li>{{ HTML::link('logout', "Log Out") }}</li>
			</ul>
		</nav>
	</div>
	</footer>
	

</div><!-- page -->

</body>
</html>
