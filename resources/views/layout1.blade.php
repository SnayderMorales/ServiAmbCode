<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.apart.css">

		<link rel="icon" href="assets/img/logo/logo.small.png">
		<title>ServiAmb</title>
		<style media="screen">
			#notifications{
				width:400px;
			}
			#img-navbar{
				height: 25px;
				width: 25px;
			}
			.letra{
				height: 40px;
				width: 40px;
			}
			.text-big{
				font-size: 30px;
			}
			#img-icon{
				height: 25px;
				width: 25px;
			}
			.media-object{
				height: 65px;
				width: 65px;
			}
		</style>
	</head>

<body>

	<section id="menu"><!-- menu -->
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		      	<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
					<a class="navbar-brand" href="{{ route('notices') }}"><img id="img-navbar" src="assets/img/logo/logo.small.png" alt="Serviamb" /></a>
		    </div>
		  	<div id="navbar" class="navbar-collapse collapse">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="{{route('subasta')}}">Propuestas</a></li>
		        <li><a href="{{ route('negocios') }}">Negocios</a></li>
		        <li><a href="{{ route('procesos') }}">Procesos</a></li>
						<li><a href="{{ route('informe') }}">Informes</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
						<li>
							<button type="button" class="btn btn-success navbar-btn"><a href="{{ route ('newpost') }}">Publicar</a></button>
						</li>
						<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-globe"></span> <span class="caret"></span></a>
		          <ul class="dropdown-menu media-list">
								<div id="notifications">
									<li class="media">
								    <div class="media-left">
											<div class="letra">
												<p class="text-big text-center"><b>L</b></h1>
											</div>
								    </div>
								    <div class="media-body">
								      <h4 class="media-heading">Le han dado 3 <span class="glyphicon glyphicon-ok"> </span> a la oferta Papel con Adhesivo </h4>
								      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								    </div>
								  </li>
									<li class="media">
								    <div class="media-left">
											<div class="letra">
												<p class="text-big text-center"><b>P</b></h1>
											</div>
								    </div>
								    <div class="media-body">
								      <h4 class="media-heading">Han Ofertado $50.000.0000,00 Por el Papel con Adhesivo </h4>
								      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								    </div>
								  </li>
									<li class="media">
								    <div class="media-left">
											<div class="letra">
												<p class="text-big text-center"><b>P</b></h1>
											</div>
								    </div>
								    <div class="media-body">
								      <h4 class="media-heading">Media heading</h4>
								      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								    </div>
								  </li>
									<li class="media">
								    <div class="media-left">
											<div class="letra">
												<p class="text-big text-center"><b>P</b></h1>
											</div>
								    </div>
								    <div class="media-body">
								      <h4 class="media-heading">Media heading</h4>
								      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
								    </div>
								  </li>
									<li class="media">
								    <p class="text-center"><a href="#">Ver las demas</a></p>
								  </li>



								</div>

		          </ul>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </li>
		        </li>
		      </ul>
		    </div><!--/.nav-collapse -->
		  </div>
		</nav>
	</section><!-- menu -->

  <section id="newline"><!-- pequeño sato de linea para evitar conflictos con el menu -->
    <br><br><br><br>
  </section>

  <section id="corps"><!-- Cuerpo de la Pagina -->
    <div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-3 col-md-3"><!-- bara de menu laterar a la izquiedad del monitor-->
          <div class="list-group">
            <a type="button" class="list-group-item" href="{{ route('notices') }}"><img id="img-icon" src="assets/img/logo/logo.small.png" alt=""> <b>ServiAmb.</b></a>
            <a type="button" class="list-group-item" href="{{ route('subasta') }}"><span class="glyphicon glyphicon-duplicate"> </span> Propuesta</a>
            <a class="list-group-item" href="{{ route('procesos') }}"><span class="glyphicon glyphicon-tasks"> </span> Procesos</a>
            <a type="button" class="list-group-item" href="{{ route('negocios') }}"><span class="glyphicon glyphicon-briefcase"></span> Negocios</a>
						<a type="button" class="list-group-item" href="{{ route('informes') }}"><span class="glyphicon glyphicon-paperclip"></span> Informes</a>
          </div>
        </div>



            @yield('content')



        <div class="col-md-3"><!-- bara de menu laterar a la derecha del monitor-->

          <div class="list-group">
            <li class="list-group-item"><!-- publicidad 1 -->
              <img src="assets/img/1.jpg" alt="" class="img-responsive img-thumbnail" />
              <h4>Servientrega</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </li>

            <li class="list-group-item"><!-- publicidad 2 -->
              <img src="assets/img/2.jpg" alt="" class="img-responsive img-thumbnail" />
              <h4>InduPollo</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </li>

            <li class="list-group-item"><!-- publicidad 3 -->
              <img src="assets/img/3.jpg" alt="" class="img-responsive img-thumbnail" />
              <h4>Indufrial</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </li>

          </div>

        </div>

      </div>
    </div>
    </section>





    @yield('scripts')
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </body>
  </html>
