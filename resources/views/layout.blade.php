<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
		<link rel="icon" href="assets/img/logo/logo.small.png">
    <title>ServiAmb</title>

    <!-- css -->
    <<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="assets/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/index/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="assets/index/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="assets/index/css/animations.css" rel="stylesheet" />
  <link href="assets/index/css/style.css" rel="stylesheet">
	<link href="assets/index/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">

                                                     <p><a href="{{ route('home') }}" class="brand"><img src="assets/index/img/nombre.png" WIDTH=200 HEIGHT=30></a></p>
                                                    </div>
                                          </div>


                                          <div class="col-md-10">

                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">

																															<li><a href="{{ route('login') }}">Login</a></li>
																															<li><a href="{{ route('register') }}">Register</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->

                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div>
    <!-- /Navigation -->











	@yield('content')


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="route('home')">Home</a></li>

					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>&copy;Copyright 2016 - <a href="#intro">ServiAmb</a> by ServiAmb</p>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Bocor
                    -->
				</div>
			</div>
		</div>
	</footer>

	<!-- Core JavaScript Files -->
	<script src="assets/index/js/jquery.min.js"></script>
	<script src="assets/index/http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="assets/index/js/jquery.sticky.js"></script>
	<script src="assets/index/js/jquery.easing.min.js"></script>
<script src="assets/index/js/jquery.scrollTo.js"></script>
<script src="assets/index/js/jquery.appear.js"></script>
<script src="assets/index/js/stellar.js"></script>
<script src="assets/index/js/nivo-lightbox.min.js"></script>

	<script src="assets/index/js/custom.js"></script>
<script src="assets/index/js/css3-animate-it.js"></script>

	@yield('scripts')
</body>
</html>
