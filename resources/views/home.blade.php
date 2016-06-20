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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="assets/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/index/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="assets/index/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="assets/index/css/animations.css" rel="stylesheet" />
    <link href="assets/index/css/style.css" rel="stylesheet">
	<link href="assets/index/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<section class="hero " id="intro" >
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="assets/index/#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">

					<div class="animatedParent">
							<br><br><br><br><br><br><br><br><br><br><br><br>
						<p class="animated fadeInUp" >
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/logo/logo.small.png" WIDTH=120 HEIGHT=120 /><br>
						 	<img src="assets/index/img/nombre.png" WIDTH=100 HEIGHT=20> <br>
							<a href="{{ route('register') }}" class="learn-more-btn btn-scroll-animatedParent">Registrate</a>
							<a href="{{ route('login') }}" class="learn-more-btn btn-scroll-animatedParent">Entrar</a>
						</p>


					</div>
			   </div>
              </div>
            </div>
    </section>


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

                                                                  <li class="active"><a href="assets/index/#intro">Home</a></li>
                                                                  <li><a href="assets/index/#about">Quienes Somos</a></li>
																  <li><a href="assets/index/#service">Servicios</a></li>
                                                                  <li><a href="assets/index/#works">Nuestro Equipo</a></li>
                                                                  <li><a href="{{ route('register') }}">Registrate</a></li>
                                                                  <li><a href="{{ route('login') }}">Entrar</a></li>
                                                                  <li><a href="assets/index/#contact">Contacto</a></li>
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

	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">Quienes Somos</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">


        <div class="row">


            <div class="col-lg-8 col-lg-offset-2 animatedParent">
				<div class="text-center">
					<p>
					Plataforma virtual, que permite la gestión integral de residuos sólidos de diferentes características, a través de la interacción de generadores de residuos (empresas, instituciones y zonas comerciales), gestores certificados y compradores de residuos, los cuales podrán establecer a través de una página web, un mercado virtual de dichos residuos, solicitando cualquiera de los servicios que necesite, entre los cuales está la gestión, compra y venta de los mismos.
					</p>
					<p>
					ServiAmb, realizará acompañamiento de los servicios, a través de evaluación y seguimiento desde la solicitud del servicio, hasta el cumplimiento del mismo. Para lo anterior, ServiAmb contará con una interfaz móvil que le permitirá al cliente, ver en tiempo real, el progreso e historial de su servicio, sin descartar que lo anteriormente expuesto, lo pueda observar en la página web.
					</p>

				</div>
            </div>


        </div>
		</div>

		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">

					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span ><img src="assets/index/img/mision.jpg" WIDTH=50 HEIGHT=50></span>
					</div>
					<div class="service-desc">
						<h5>Misión</h5>
						<div class="divider-header"></div>
						<p>
						Proporcionarle a la comunidad empresarial, institucional y comercial, una solución ambientalmente moderna, a través de la interacción entre generadores, gestores y compradores de residuos sólidos legalmente constituidos, dentro de un mercado virtual, con el fin de minimizar los impactos ambientales y sociales que resultan de diversos procesos.

												</p>
						<a href="assets/index/#" class="btn btn-skin">Home</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">


            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span ><img src="assets/index/img/vision.jpg" WIDTH=50 HEIGHT=50></span>
					</div>
					<div class="service-desc">
						<h5>Visión </h5>
						<div class="divider-header"></div>
						<p>
						Constituir una plataforma virtual que brinde de manera segura y organizada, la oportunidad de gestionar, vender y comprar residuos sólidos,<br> garantizando la satisfacción de los clientes y colaboradores.

						</p>
						<a href="assets/index/#" class="btn btn-skin">Home</a><br><br>

					</div>
                </div>
				</div>
            </div>
	</section>
	<!-- /Section: quienes somos -->



	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">Servicios </h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span ><img src="assets/index/img/vender.png" WIDTH=50 HEIGHT=50></span>
					</div>
					<div class="service-desc">
						<h5>Compra de Residuos </h5>
						<div class="divider-header"></div>
						<p>
						Si usted piensa que reciclar, es un proceso exitoso, que ayuda al desarrollo sostenible del planeta, y utiliza tipos de residuos con características reciclables para sus procesos o actividades económicas. ServiAmb le da la oportunidad de ofertar sus residuos y recibir propuestas de vendedores potenciales y calificados.<br><br>

						<b>Además, el servicio le permitirá observar:</b><br>
						<li>Respuestas de las solicitudes de terceros con alta reputación y confiabilidad en sus servicios.</l1>

						<li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb</l1>

						</p>
						<a href="assets/index/#" class="btn btn-skin">Home</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span ><img src="assets/index/img/ne.jpg" WIDTH=50 HEIGHT=50></span>
					</div>
					<div class="service-desc">
						<h5>Venta de Residuos </h5>
						<div class="divider-header"></div>
						<p>
						Si piensa que sus residuos pueden ser aprovechados y/o valorizados, publique sus residuos y reciba ofertas por parte de potenciales compradores, de los cuales podrá elegir de acuerdo a las siguientes características:

							<li>Mejor oferta, en cuanto al valor de los residuos.</li>
							<li>Fiabilidad y calificación del comprador.</li>
							<br>
						<b>Además, el servicio le permitirá observar:</b><br><br>


						<li>Visualizar ventas realizadas.</li>
						<li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>

						</p>
						<a href="assets/index/#" class="btn btn-skin">Home</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span ><img src="assets/index/img/ges.png" WIDTH=50 HEIGHT=50></span>
					</div>
					<div class="service-desc">
						<h5>Gestionar Residuos </h5>
						<div class="divider-header"></div>
						<p>
						Si tiene dudas de cómo controlar los residuos generados sus procesos, publique a través de la plataforma la necesidad de servicio de gestión integral de residuos y reciba ofertas de servicio por parte de gestores calificados, de los cuales podrá elegir la mejor propuesta.<br><br>

						<b>Además, el servicio le permitirá observar:</b><br>

						<li>Respuestas de las solicitudes de gestores con alta reputación y confiabilidad en sus servicios.</li>
						<li>Visualizar compras realizadas.</li>
						<li>Progreso del servicio a través de la plataforma e interfaz móvil de ServiAmb.</li>

						</p>
						<a href="assets/index/#" class="btn btn-skin">Home</a>
					</div>
                </div>
				</div>
            </div>

        </div>
		</div>
		</div>
	</section>
	<!-- /Section: services -->


	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Nuestro Equipo</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="assets/index/img/works/1.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/1.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Liliana Castillo </h3>
							<p class="text-center">Ingeniera Ambiental</p>
							<a href="assets/index/s://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="assets/index/img/works/2.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/2.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Daniela Garcia </h3>
							<p class="text-center">Ingeniera Ambiental</p>
							<a href="https://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="assets/index/img/works/3.jpg" class="img-responsive"data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/3.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Rafael Chamorro </h3>
							<p class="text-center">Ingeniero Industrial</p>
							<a href="https://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="assets/index/img/works/4.jpg" class="img-responsive"data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/4.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Keiner Pajaro </h3>
							<p class="text-center">Ingeniero Sistemas</p>
							<a href="https://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
					</div>

                </div>

                 <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="assets/index/img/works/5.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/5.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Geovanni Padilla </h3>
							<p class="text-center">IngenieraoSistemas</p>
							<a href="https://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="assets/index/img/works/6.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/6.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Luis Fernandez</h3>
							<p class="text-center">Ingeniero Sistemas</p>
							<a href="https://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="assets/index/img/works/7.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/7.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Carlos Mendoza </h3>
							<p class="text-center">Ingeniero Sistemas</p>
							<a href="ahttps://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="http://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="assets/index/img/works/8.jpg" class="img-responsive" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="assets/index/img/works/8.jpg" class="img-responsive" alt="img">
							</a>
							<h3 class="text-center">Esnayder Morales </h3>
							<p class="text-center">Ingeniero Sistemas</p>
							<a href="ahttps://www.facebook.com/"><img src="assets/index/img/icon-redes/1.png" alt=""></a>
								<a href="http://wwww.twitter.com"><img src="assets/index/img/icon-redes/2.png" alt=""></a>
								<a href="ahttp://wwww.instagram.com"><img src="assets/index/img/icon-redes/3.png" alt=""></a>

						</div>
					</div>

                </div>
            </div>
		</div>

	</section>
	<!-- /Section: works -->




	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Contacto</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Su Nombre" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Su Email" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Asunto" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Mensaje"></textarea>
								</div>
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Enviar Mensaje</button>
							</div>
						</div>
						</form>
				</div>
			</div>


		</div>


	</section>
	<!-- /Section: contact -->


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul class="footer-menu">
						<li><a href="assets/index/#">Home</a></li>

					</ul>
				</div>
				<div class="col-md-6 text-right">
					<p>&copy;Copyright 2016 - <a href="assets/index/#intro">ServiAmb</a> by ServiAmb</p>
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

</body>

</html>
