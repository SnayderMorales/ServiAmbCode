<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.apart.css ">

		<link rel="icon" href="assets/img/logotipo.png">
		<title>ServiAmb</title>
		<style media="screen">
			#company{
				background-color:#CEF6CE;
			}
			#contact{
				background-color:;
				background-image: url(img/bg.jpg);
				background-position: center;
				background-attachment: fixed;
			}
			#team{
				background-color:#CEF6F5;
			}
			#job{
				background-color:;
				background-image: url(img/bg.jpg);
				background-position: center;
				background-attachment: fixed;
			}
		</style>

	</head>
	<body>

		<section id="menu"><!-- menu -->
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#slider">ServiAmb</a>
			    </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			      <ul class="nav navbar-nav">

			        <li><a href="#company">Quenes Somos</a></li>
							<li><a href="#job">Que Acemos</a></li>
							<li><a href="#team">Equipo</a></li>
			        <li><a href="#contact">contactenos</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
							@if (Auth::guest())
							<li><a data-toggle="modal" data-target=".check-in">Registro</a></li>
			        <li><a class="disabled" data-toggle="modal" data-target=".login" disabled>Login</a></li>
              @else
    						<li class="dropdown">
    							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
    							<ul class="dropdown-menu" role="menu">
    								<li><a href="{{ route('logout') }}">Logout</a></li>
    							</ul>
    						</li>
    					@endif
			      </ul>
			    </div>
			  </div>
			</nav>


      	@yield('content')



        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        @yield('scripts')
        </body>
      </html>
