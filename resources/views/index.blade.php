
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home-Funmav</title>
		<link rel="icon" href="{{asset("favicon.jpg")}}" type="image/x-icon">
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->

		<link href="{{asset("http://fonts.googleapis.com/css?family=Open+Sans:400,300,700")}}" rel="stylesheet" type="text/css">

		<!-- Fontawesome Icon font -->
		<link rel="stylesheet" href="{{asset("../../css/font-awesome.min.css")}}" >
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{asset("../../css/jquery.fancybox.css")}}" >
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{asset("../../css/bootstrap.min.css")}}" >
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{asset("../../css/owl.carousel.css")}}" >
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{asset("../../css/slit-slider.css")}}" >
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{asset("../../css/animate.css")}}" >
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="{{asset("../../css/main.css")}}" >


    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="{{url('/')}}">FunMaV</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav-->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#about">Quienes somos</a></li>
                        <li><a href="#service">Servicios</a></li>
                        <li><a href="#portfolio">Actividades</a></li>
                        <li><a href="#testimonials">Testimonios</a></li>
                        <li><a href="#price">Grupo</a></li>
                        <li><a href="#contact">Contactenos</a></li>
                        

                        @if (Auth::check())
                        <li><a href="{{url('/inicio')}}">Dashboard</a></li>
                        @else
                        <li><a href="{{url('/login')}}">Login</a></li>
                        @endif

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="bg-img bg-img-1"></div>
						<div class="slide-caption">
							<div class="caption-content">
								<h2 class="animated fadeInDown">FUNDACION MANANTIAL DE VIDA</h2>
							</div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
							<div class="caption-content">
								<h2 class="animated fadeInDown">FUNDACION MANANTIAL DE VIDA</h2>
							</div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
							<div class="caption-content">
								<h2 class="animated fadeInDown">FUNDACION MANANTIAL DE VIDA</h2>
							</div>
						</div>
					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>
			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<div id="works">
									<div class="work-item">
										<h3>Mision</h3>
										<p align="justify">La misión es la resocialización de individuos que se hayan marginados o impedidos por causa de la problemática de la drogadicción alcoholismo etc., a través de un proceso de restauración en donde va a encontrar un hogar, amor, comprensión, ayuda y se va reeducar por medio de las terapias ocupacionales, charlas, y otros.</p>
									</div>
									<div class="work-item">
										<h3>Vision</h3>
										<p  align="justify">La rehabilitación y reinserción de Hombres, Mujeres y niños que circunstancialmente se encuentran impedidos por consumo de droga y/o marginamiento social por abandono con consecuencias de compromiso delictivo, en alguno de los casos en los que se presente acuerdo interinstitucional.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h3>Historia De Nuestra Fundacion Manantial De Vida</h3>
								<div id="works">
									<div class="work-item">
										<img src="{{asset("fundacion.jpg")}}" class="pull-left" alt="member">
										<p align="justify"> En enero del año 1999 llego a girardot el pastor pablo ramírez y dos compañeros más enviados
											con el propósito único de ayudar a personas con problemas de marginamiento social por causa de la farmacodependencia,
											y cuando llegaron no tenían donde dormir y pidieron ayuda en el colegio americano quienes inmediatamente les dieron
											el alojamiento por una noche, al  otro día fueron en busca de la señora amparo en la plazo de mercado quien tiene un restaurante,
											y esta señora permitió que ellos durmieran en su casa unos días mientras realizaban la venta de las bolsas que habían traído para
											poder pagar el primer arriendo, consiguieron la primera casa en la carrera 8 con 17 y comenzaron a tocar las puertas del comercio y recoger
											personas que estaban en las calles, encontramos que la asociación de comerciantes de Girardot apoyo en gran manera la obra, especialmente don
											Ignacio reyes quien pago el arriendo y llevaba mercados durante los primeros 6 meses y después hasta la fecha no ha parado de ayudar a esta noble causa.</p>
									</div>
									<div class="work-item">
										<img src="{{asset("fundacion.jpg")}}" class="pull-left" alt="member">
										<p align="justify"> A medida que pasaba el tiempo ha crecido la obra en esta ciudad, el hermano pablo conoció en Girardot a su esposa y se casaron en el año 1999 en esta ciudad,
											en la iglesia centro bíblico de Girardot, luego encontraron una casa en el barrio san Antonio en la cual se pagó arriendo por 11 años, y desde
											hace 3 años se adquirió la casa en la calle 21 b no: 3-36. se ha tenido el respaldo de toda la gente de Girardot y de las siguientes administraciones.
											dándole oportunidad a la fundación para realizar trabajos en beneficio de la comunidad, apoyando para favorecer esta problemática y noble causa.</p>
									</div>
						     	 </div>
						    </div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Pilares De La Fundacion.</h2>
							<p class="wow animated bounceInRight">Todos Los Caminos Nos Conducen a Dios </p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>HOGAR</h3>
								<p align="justify"> Sera tu segundo Hogar, donde progras compartir, vivir, aprender. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>EDUCACION</h3>
								<p align="justify">Tenemos convenios con el sena y otras institucion de educacion media para ampliar el conocmiento como pilar de una mejor vida. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>ACTIVIDADES</h3>
								<p align="justify">Cada dia intentamos fortalecer lazos entre compañeros, con actividades socioculturales, cumpleaños, deporte, musica. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<h3>AMOR A DIOS</h3>
								<p align="justify">.</p>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>NUESTRAS ACTIVIDADES</h2>
							<p>En la fundación cada día buscamos formas para así mismo ayudar a las personas a dejar sus problemas de consumo y alcoholismo.</p>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="{{asset("img/portfolio/Celebracionmadre/1.jpg")}}" class="img-responsive" alt="Celebracion dia de la Madre">
								<figcaption class="mask">
									<h3>Dia de las Madres</h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li>
										<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/1.jpg")}}">
                                            <i class="fa fa-search"></i>
                                            <a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/2.jpg")}}">
                                                <a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/3.jpg")}}">
                                                    <a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/4.jpg")}}">
                                                        <a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/5.jpg")}}">
															<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/6.jpg")}}">
																<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/7.jpg")}}">
																	<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/8.jpg")}}">
																		<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/9.jpg")}}">
																			<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/10.jpg")}}">
																				<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/11.jpg")}}">
																					<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/12.png")}}">
																						<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/13.png")}}">
																							<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/14.jpg")}}">
																								<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/15.jpg")}}">
																									<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/16.jpg")}}">
																										<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/17.jpg")}}">
																											<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/18.jpg")}}">
																												<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/19.jpg")}}">
																													<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/20.jpg")}}">
																														<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/21.jpg")}}">
																															<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/22.jpg")}}">
																																<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/23.jpg")}}">
																																	<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/24.jpg")}}">
																																		<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/25.jpg")}}">
																																			<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/26.jpg")}}">
																																				<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/27.jpg")}}">
																																					<a class="fancybox" title="Celebracion"  data-fancybox-group="works" href="{{asset("img/portfolio/Celebracionmadre/28.jpg")}}">
                                                        </a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
									</li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="{{asset("img/portfolio/grados/1.jpg")}}" class="img-responsive" alt="Grados de Completementacion Escolar">
								<figcaption class="mask">
									<h3>Graduacion de Bachilleres </h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li>
										<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/1.jpg")}}">
											<i class="fa fa-search"></i>
											<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/2.jpg")}}">
												<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/3.jpg")}}">
													<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/4.jpg")}}">
														<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/5.jpg")}}">
															<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/6.jpg")}}">
																<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/7.jpg")}}">
																	<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/8.jpg")}}">
																		<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/9.jpg")}}">
																			<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/10.jpg")}}">
																				<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/11.jpg")}}">
																					<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/12.jpg")}}">
																						<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/13.jpg")}}">
																							<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/14.jpg")}}">
																								<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/15.jpg")}}">
																									<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/16.jpg")}}">
																										<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/17.jpg")}}">
																											<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/18.jpg")}}">
																												<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/19.jpg")}}">
																													<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/20.jpg")}}">
																														<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/21.jpg")}}">
																															<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/22.jpg")}}">
																																<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/23.jpg")}}">
																																	<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/24.jpg")}}">
																																		<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/25.jpg")}}">
																																			<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/30.jpg")}}">
																																				<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/31.jpg")}}">
																																					<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/32.jpg")}}">
																																						<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/33.jpg")}}">
																																							<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/34.jpg")}}">
																																								<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/35.jpg")}}">
																																									<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/36.jpg")}}">
																																										<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/37.jpg")}}">
																																											<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/38.jpg")}}">
																																												<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/39.jpg")}}">
																																													<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/40.jpg")}}">
																																														<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/41.jpg")}}">
																																															<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/42.jpg")}}">
																																																<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/43.jpg")}}">
																																																	<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/44.jpg")}}">
																																																		<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/45.jpg")}}">
																																																			<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/46.jpg")}}">
																																																				<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/47.jpg")}}">
																																																					<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/48.jpg")}}">
																																																						<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/49.jpg")}}">
																																																							<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/50.jpg")}}">
																																																								<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/51.jpg")}}">
																																																									<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/52.jpg")}}">
																																																										<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/53.jpg")}}">
																																																											<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/54.jpg")}}">
																																																												<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/55.jpg")}}">
																																																													<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/56.jpg")}}">
																																																														<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/57.jpg")}}">
																																																															<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/58.jpg")}}">
																																																																<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/59.jpg")}}">
																																																																	<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/60.jpg")}}">
																																																																		<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/61.jpg")}}">
																																																																			<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/62.jpg")}}">
																																																																				<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/63.jpg")}}">
																																																																					<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/64.jpg")}}">
																																																																						<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/65.jpg")}}">
																																																																							<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/66.jpg")}}">
																																																																								<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/67.jpg")}}">
																																																																									<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/68.jpg")}}">
																																																																										<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/69.jpg")}}">
																																																																											<a class="fancybox" title="Grados"  data-fancybox-group="works" href="{{asset("img/portfolio/grados/70.jpg")}}">

																																					</a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
									</li>
								</ul>
							</li>


							<li class="portfolio-item">
								<img src="{{asset("img/portfolio/Recreacion/1.jpg")}}" class="img-responsive" alt="Hogar de Mujeres">
								<figcaption class="mask">
									<h3>Salida a Piscina</h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li>
										<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/1.jpg")}}">
											<i class="fa fa-search"></i>
											<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/2.jpg")}}">
												<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/3.jpg")}}">
													<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/4.jpg")}}">
														<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/5.jpg")}}">
															<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/6.jpg")}}">
																<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/7.jpg")}}">
																	<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/8.jpg")}}">
																		<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/9.jpg")}}">
																			<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/10.jpg")}}">
																				<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/11.jpg")}}">
																					<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/12.jpg")}}">
																						<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/13.jpg")}}">
																							<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/14.jpg")}}">
																								<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/15.jpg")}}">
																									<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/16.jpg")}}">
																										<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/17.jpg")}}">
																											<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/18.jpg")}}">
																												<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/19.jpg")}}">
																													<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/20.jpg")}}">
																														<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/21.jpg")}}">
																															<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/22.jpg")}}">
																																<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/23.jpg")}}">
																																	<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/24.jpg")}}">
																																		<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/25.jpg")}}">
																																			<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/30.jpg")}}">
																																				<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/31.jpg")}}">
																																					<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/32.jpg")}}">
																																						<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/33.jpg")}}">
																																							<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/34.jpg")}}">
																																								<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/35.jpg")}}">
																																									<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/36.jpg")}}">
																																										<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/37.jpg")}}">
																																											<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/38.jpg")}}">
																																												<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/39.jpg")}}">
																																													<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/40.jpg")}}">
																																														<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/41.jpg")}}">
																																															<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/42.jpg")}}">
																																																<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/43.jpg")}}">
																																																	<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/44.jpg")}}">
																																																		<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/45.jpg")}}">
																																																			<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/46.jpg")}}">
																																																				<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/47.jpg")}}">
																																																					<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/48.jpg")}}">
																																																						<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/49.jpg")}}">
																																																							<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/50.jpg")}}">
																																																								<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/51.jpg")}}">
																																																									<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/52.jpg")}}">
																																																										<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/53.jpg")}}">
																																																											<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/54.jpg")}}">
																																																												<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/55.jpg")}}">
																																																													<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/56.jpg")}}">
																																																														<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/57.jpg")}}">
																																																															<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/58.jpg")}}">
																																																																<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/59.jpg")}}">
																																																																	<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/60.jpg")}}">
																																																																		<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/61.jpg")}}">
																																																																			<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/62.jpg")}}">
																																																																				<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/63.jpg")}}">
																																																																					<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/64.jpg")}}">
																																																																						<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/65.jpg")}}">
																																																																							<a class="fancybox" title="Recreacion"  data-fancybox-group="works" href="{{asset("img/portfolio/Recreacion/66.jpg")}}">
																																																																							</a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
									</li>
								</ul>
							</li>

                            <li class="portfolio-item">
                                <img src="{{asset("img/portfolio/bautismos/1.jpg")}}" class="img-responsive" alt="Ceremonia de Bautismo">
                                <figcaption class="mask">
                                    <h3>Bautismo</h3>
                                    <p></p>
                                </figcaption>
                                <ul class="external">
                                    <li>
                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/1.jpg")}}">
                                            <i class="fa fa-search"></i>
                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/2.jpg")}}">
                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/3.jpg")}}">
                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/4.jpg")}}">
                                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/5.jpg")}}">
                                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/6.jpg")}}">
                                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/7.jpg")}}">
                                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/8.jpg")}}">
                                                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/9.jpg")}}">
                                                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/10.jpg")}}">
                                                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/11.jpg")}}">
                                                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/12.jpg")}}">
                                                                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/13.jpg")}}">
                                                                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/14.jpg")}}">
                                                                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/15.jpg")}}">
                                                                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/16.jpg")}}">
                                                                                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/17.jpg")}}">
                                                                                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/18.jpg")}}">
                                                                                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/19.jpg")}}">
                                                                                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/20.jpg")}}">
                                                                                                                        <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/21.jpg")}}">
                                                                                                                            <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/22.jpg")}}">
                                                                                                                                <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/23.jpg")}}">
                                                                                                                                    <a class="fancybox" title="Bautismo"  data-fancybox-group="works" href="{{asset("img/portfolio/Bautismos/24.jpg")}}">

                                                                                                                                    </a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
                                    </li>
                                </ul>
                            </li>


							<li class="portfolio-item">
								<img src="{{asset("img/portfolio/uniminuto/1.jpg")}}" class="img-responsive" alt="Practica Uniminuto">
								<figcaption class="mask">
									<h3>Charla UniMinuto</h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li>
										<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/1.jpg")}}">
											<i class="fa fa-search"></i>
											<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/2.jpg")}}">
												<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/3.jpg")}}">
													<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/4.jpg")}}">
														<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/5.jpg")}}">
															<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/6.jpg")}}">
																<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/7.jpg")}}">
																	<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/8.jpg")}}">
																		<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/9.jpg")}}">
																			<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/10.jpg")}}">
																				<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/11.jpg")}}">
																					<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/12.jpg")}}">
																						<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/13.jpg")}}">
																							<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/14.jpg")}}">
																								<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/15.jpg")}}">
																									<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/16.jpg")}}">
																										<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/17.jpg")}}">
																											<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/18.jpg")}}">
																												<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/19.jpg")}}">
																													<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/20.jpg")}}">
																														<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/21.jpg")}}">
																															<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/22.jpg")}}">
																																<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/23.jpg")}}">
																																	<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/24.jpg")}}">
																																		<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/25.jpg")}}">
																																			<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/26.jpg")}}">
																																				<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/27.jpg")}}">
																																					<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/28.jpg")}}">
																																						<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/29.jpg")}}">
																																							<a class="fancybox" title="Uniminuto"  data-fancybox-group="works" href="{{asset("img/portfolio/Uniminuto/30.jpg")}}">


																																	</a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
									</li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="{{asset("img/portfolio/tolemaida/1.jpg")}}" class="img-responsive" alt="Chrla en Toleimada">
								<figcaption class="mask">
									<h3>charla al ejercito</h3>
									<p></p>
								</figcaption>
								<ul class="external">
									<li>
										<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/1.jpg")}}">
											<i class="fa fa-search"></i>
											<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/2.jpg")}}">
												<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/3.jpg")}}">
													<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/4.jpg")}}">
														<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/5.jpg")}}">
															<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/6.jpg")}}">
																<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/7.jpg")}}">
																	<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/8.jpg")}}">
																		<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/9.jpg")}}">
																			<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/10.jpg")}}">
																				<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/11.jpg")}}">
																					<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/12.jpg")}}">
																						<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/13.jpg")}}">
																							<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/14.jpg")}}">
																								<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/15.jpg")}}">
																									<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/16.jpg")}}">
																										<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/17.jpg")}}">
																											<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/18.jpg")}}">
																												<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/19.jpg")}}">
																													<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/20.jpg")}}">
																														<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/21.jpg")}}">
																															<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/22.jpg")}}">
																																<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/23.jpg")}}">
																																	<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/24.jpg")}}">
																																		<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/25.jpg")}}">
																																			<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/30.jpg")}}">
																																				<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/31.jpg")}}">
																																					<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/32.jpg")}}">
																																						<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/33.jpg")}}">
																																							<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/34.jpg")}}">
																																								<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/35.jpg")}}">
																																									<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/36.jpg")}}">
																																										<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/37.jpg")}}">
																																											<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/38.jpg")}}">
																																												<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/39.jpg")}}">
																																													<a class="fancybox" title="Tolemaida"  data-fancybox-group="works" href="{{asset("img/portfolio/tolemaida/40.jpg")}}">


																																													</a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a>
									</li>
								</ul>
							</li>

						</ul>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Testimonios.</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<div class="clearfix">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/6ApQVt0rI5w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<div class="clearfix">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/TLH6TR4N-mA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<div class="clearfix">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/d-upLWWGkog" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<div class="clearfix">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/jy7_ccWRZbk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- Price section -->
			<section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Grupo De Trabajo</h2>
							<h3>Conocenos</h3>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Psicologia</span>
								<div class="value">
									<span>foto</span><br>
									<span>Nombre</span><br>
								</div>
								<ul>
									<li>Titulos</li>
									<li>Titulos</li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Pastores</span>
								<div class="value">
									<span>foto</span><br>
									<span>Nombre</span><br>
								</div>
								<ul>
									<li>Titulos</li>
									<li>Titulos</li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Trabajador social</span>
								<div class="value">
									<span>foto</span><br>
									<span>Nombre</span><br>
								</div>
								<ul>
									<li>Titulos</li>
									<li>Titulos</li>
								</ul>
							</div>
						</div>
		
					</div>
				</div>
			</section>
			<!-- end Price section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>SIGUENOS</h2>
								<p>CONOCE LA BELLA OBRA DE AYUDAR A PERSONAS A SALIR DEL MUNDO DE LAS DROGAS.</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contactenos</h2>
							<p>Denjenos un Mensaje</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" class="form-control" placeholder="Sus Nombres...">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Su Correo Electronico...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" class="form-control" placeholder="Tema...">
								</div>
								<div class="input-field">
									<textarea name="message" class="form-control" placeholder="Mensaje..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Enviar</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contactenos</h3>
								<p><i class="fa fa-pencil"></i>Fundacion Manantial De Vida.<span>Girardot,Cundinamarca</span><span>Colombia</span></p><br>
								<p><i class="fa fa-phone"></i>Telefono: (415) 124-5678 </p>
                                <p><i class="fa fa-phone"></i>Telefono: (415) 124-5678 </p>
								<p><i class="fa fa-envelope"></i>website@yourname.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<section id="google-map">
				<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3299.9521513703853!2d-74.80085188584323!3d4.299073846207538!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f289407c273cb%3A0xd2b6bed1de463121!2sCl.+21b+%233-32%2C+Girardot%2C+Cundinamarca!5e1!3m2!1ses!2sco!4v1520389118680" width="1400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
				</div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">	
						<p>Copyright &copy; 2018 Design and Developed By<a href="http://www.themefisher.com">Themefisher to Funmav</a> </p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Essential jQuery Plugins
		================================================== -->
        <!-- Google Map API -->
        <script src="{{asset("http://maps.google.com/maps/api/js?sensor=false")}}"></script>
		<!-- Main jQuery -->
		<script src="{{asset("../../js/jquery-1.11.1.min.js")}}"></script>
		<!-- Twitter Bootstrap -->
		<script src="{{asset("../../js/bootstrap.min.js")}}"></script>
        <!-- Modernizer Script for old Browsers -->
        <script src="{{asset("../../js/modernizr-2.6.2.min.js")}}"></script>
		<!-- Single Page Nav -->
		<script src="{{asset("../../js/jquery.singlePageNav.min.js")}}"></script>
		<!-- jquery.fancybox.pack -->
		<script src="{{asset("../../js/jquery.fancybox.pack.js")}}"></script>
		<!-- Owl Carousel -->
		<script src="{{asset("../../js/owl.carousel.min.js")}}"></script>
        <!-- jquery easing -->
		<script src="{{asset("../../js/jquery.easing.min.js")}}"></script>
        <!-- Fullscreen slider -->
		<script src="{{asset("../../js/jquery.slitslider.js")}}"></script>
		<script src="{{asset("../../js/jquery.ba-cond.min.js")}}"></script>
		<!-- onscroll animation -->
		<script src="{{asset("../../js/wow.min.js")}}"></script>
		<!-- Custom Functions -->
		<script src="{{asset("../../js/main.js")}}"></script>
    </body>
</html>