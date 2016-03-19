<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'DISTRIHERRAMIENTAS';
?>
<div class="site-login">
<body>

	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 317 893 90 49 - (4) 351 06 52</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> distriherramientas@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class=""></i></a></li>
								<li><a href="#"><i class=""></i></a></li>
								<li><a href="#"><i class=""></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								
								</button>
								
							</div>
							
							<div class="btn-group">
								
								</button>
								
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="login.html"><i class="fa fa-user"></i> Distrinet</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Inicio</a></li>
								<li><a href="blog.html">Acerca de</a></li>
                                    
                                </li> 
								<li class="dropdown"><a href="#">Productos<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="ferreteria.html">Línea Ferretera</a></li>
										<li><a href="filtracion.html">Filtración y Lubricación</a></li> 
										<li><a href="seguridad.html">Seguridad Industrial</a></li> 			
										<li><a href="repuestos.html">Repuestos de Maquinaria Pesada</a></li> 
 
                                    </ul>
                                </li> 
								
								<li><a href="404.html">Sedes</a></li>
								<li><a href="contact-us.html">Contáctenos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>CATEGORIAS</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#Ferreteria">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Línea Ferretera
										</a>
									</h4>
								</div>
								<div id="Ferreteria" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="ferreabrasivos.html">Abrasivos </a></li>
											<li><a href="ferreagri.html">Agrícola </a></li>
											<li><a href="ferreconstru.html">Construcción</a></li>
											<li><a href="ferregriferia.html">Griferia </a></li>
											<li><a href="ferrehmanual.html">Herramienta Manual </a></li>
											<li><a href="ferrehelect.html">Herramientas Eléctricas</a></li>
											<li><a href="ferrepegante.html">Pegantes </a></li>
											<li><a href="ferrequimi.html">Químicos </a></li>

										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#filtracion">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Filtración y Lubricación
										</a>
									</h4>
								</div>
								<div id="filtracion" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="filaceites.html">Aceites</a></li>
											<li><a href="filtfilt.html">Filtros</a></li>

										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#seguridad">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Seguridad Industrial
										</a>
									</h4>
								</div>
								<div id="seguridad" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="segauditiva.html">Protección Auditiva</a></li>
											<li><a href="segcaidas.html">Protección Contra Caidas</a></li>
											<li><a href="segcorporal.html">Protección Corporal</a></li>
											<li><a href="segcabeza.html">Protección de Cabeza y Rostro</a></li>
											<li><a href="segmanos.html">Protección para Manos</a></li>
											<li><a href="segpies.html">Protección para Pies y Piernas</a></li>	
											<li><a href="segrespira.html">Protección Respiratoria</a></li>																					
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="shoprepuestos.html">Repuestos Maquinaria Pesada</a></h4>
								</div>
							</div>
							
							
						</div><!--/category-products-->
					
						<div class="ban text-center"><!--shipping-->
							<img src="images/home/ban2.png" alt="" />
						</div><!--/shipping-->
					</div>
				</div>

										
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Visita nuestras sedes</h2>
						<div class="single-blog-post">
				
							<a href="">

								<p>
								Distriherramientas a ampliado su cobertura a 3 diferentes lugares de Colombia, para así suplir las necesidades de nuestros clientes de forma más agil y segura.</p> <br>
								<img src="images/home/dh2.jpg" alt="" width="400" height="200" frameborder="0" style="border:0" allowfullscreen>
							</a>
							<div class="col-sm-4">
							<h2 class="title text-center">MEDELLÍN</h2>
							<p>

							<h3>Distriherramientas S.A.S</h3></br>

							Carrera 63D #42 B- 34</br>
							Av. Bolivariana</br></p>

							Teléfono: 351 06 52</br>
							Celular: 317 893 90 49</br>
							E-mail: distriherramientas@gmail.com</p> <br>

							<p>
							</div>
							<div class="col-sm-4">
							<h2 class="title text-center">CAUCASIA</h2>
							<p>

							<h3>Distriherramientas S.A.S</h3></br>

							CL 30 Transv. 30 - 31 </br>
							Barrio el Palmar por la bodega Pilsen</br></p>
							Teléfono: 839 35 06</br>
							Celular: 310 545 10 38</br>
							E-mail: distriherramientas@gmail.com</p> <br>

							<p>
							</div>
							<div class="col-sm-4">
							<h2 class="title text-center">AMALFI</h2>
							<p>


							<h3>Distriherramientas S.A.S</h3></br>

							Carrera Aranzasu 19 - 72</br>
							Bajos del hotel Riachon</br></p>
							Teléfono: 830 01 05</br>
							Celular: 313 789 34 51</br>
							E-mail: distriherramientas@gmail.com</p> <br>

							<p>
							</div>
							
							
							
							<div class="pager-area">
								
							</div>
							<div class="carousel-inner">

							<div class="item active">
								<div class="col-sm-9">
									
								</div>
								
							</div>
					
							
					
							
						</div>
						</div>
					</div><!--/blog-post-area-->

					
					
					</div><!--/Response-area-->
		
				</div>	
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Distri</span>herramientas</h2>

							<p></p>
						</div>
					</div>
					
					<div class="col-sm-7">
					
					</div>

					

					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Carrera 63D #42 B- 34 Av. Bolivariana</br>Medellín - Colombia</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
				
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>MAQUINARIA PESADA</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="shoprepuestos.html">Herramientas de Corte</a></li>
								<li><a href="shoprepuestos.html">Material de Desgaste</a></li>
								<li><a href="shoprepuestos.html">Miscelanea</a></li>
								<li><a href="shoprepuestos.html">Rodamientos</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>FERRETERIA</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="ferreconstru.html">Construcción</a></li>
								<li><a href="ferreabrasivos.html">Abrasivos</a></li>
								<li><a href="ferrehmanual.html">Herramienta Manual</a></li>
								<li><a href="ferrehelect.html">Herramientas Electricas</a></li>
								<li><a href="ferregriferia.html">Griferia</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>FILTRACIÓN Y LUBRICACIÓN</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="filaceites.html">Aceites</a></li>
								<li><a href="filtfilt.html">Filtros</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SEGURIDAD INDUSTRIAL</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="segcabeza.html">Protección de Cabeza y Rostro</a></li>
								<li><a href="segpies.html">Protección para Pies y Piernas</a></li>
								<li><a href="segauditiva.html">Protección Auditiva</a></li>
								<li><a href="segcaidas.html">Protección contra Caídas</a></li>
								<li><a href="segcorporal.html">Protección Corporal</a></li>
 								<li><a href="segmanos.html">Protección para Manos</a></li>
 								<li><a href="segrespira.html">Protección Respiratoria</a></li>

							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Inscribe tu correo</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Ingresa tu correo" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Recibe las actualizaciones más recientes de nuestro sitio web.</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Distriherramientas S.A.S All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="">SAHELA</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

</body>
</div>
</html>