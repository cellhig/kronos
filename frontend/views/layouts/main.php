<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\PagAsset;
use common\widgets\Alert;

PagAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    
    <header id="header"><!--header-->
        <div class="header_top"><!--Cabecera-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href=""><i class="fa fa-phone"></i> 317 893 90 49 - (4) 351 06 52</a></li>
                                <li><a href=""><i class="fa fa-envelope"></i> distriherramientas@gmail.com</a></li>
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
                                <li><a href="https://plus.google.com/103692929115412865467/about"><i class="fa fa-google-plus"></i></a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Cabecera-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href=""><img src="images/home/logo.png" alt="" /></a>
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
                                <li><a  href="http://backend.dev:90/"><i class="fa fa-user"></i> Distrinet</a></li>
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
                                <li><a href="acercade.html">Acerca de</a></li>
                                    
                                </li> 
                                <li class="dropdown"><a href="#">Productos<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="ferreteria.html">Línea Ferretera</a></li>
                                        <li><a href="filtracion.html">Filtración y Lubricación</a></li> 
                                        <li><a href="seguridad.html">Seguridad Industrial</a></li>          
                                        <li><a href="repuestos.html">Repuestos de Maquinaria Pesada</a></li> 
 
                                    </ul>
                                </li> 
                                
                                <li><a href="sedes.html">Sedes</a></li>
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


    <div class="container">
    
        <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>Distri</span>herramientas</h1>
                                    <h2>Ferreteria, construcción y seguridad</h2>
                                    <p>Proveer soluciones con materiales y herramientas de ferreteria en general, maquinaria pesada, seguridad industrial.</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/3.jpg" class="3 img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Distri</span>herramientas</h1>
                                    <h2>Sede Caucasia</h2>
                                    <p>Visitanos para tener el gusto a atenderte
                                    </p>
                                    </div>
                                <div class="col-sm-6">
                                    <img src="images/home/4.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>Distri</span>herramientas</h1>
                                    <h2>Sede Amalfi</h2>
                                    <p>Visitanos para tener el gusto a atenderte
                                    </p>
                                    </div>
                                <div class="col-sm-6">
                                    <img src="images/home/31.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
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
                    
                        <div class=""><!--izq-->
                            <h2></h2>
                            
                        </div><!--/izq-->
                        
                        <div class=""><!--izq-->
                            <h2></h2>
                            
                        </div><!--/izq-->
                        
                        <div class="ban text-center"><!--shipping-->
                            <img src="images/home/ban2.png" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">PRODUCTOS</h2>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/productos/REPUESTOS MAQUINARIA PESADA/5201.jpg" alt="" />
                                            <h2>5201</h2>
                                            <p>Balde Retroexcavadora</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                        </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/productos/REPUESTOS MAQUINARIA PESADA/5208.jpg" alt="" />
                                        <h2>5208</h2>
                                        <p>Cadena</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                            
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/productos/REPUESTOS MAQUINARIA PESADA/5207.jpg" alt="" />
                                        <h2>5207</h2>
                                        <p>Bujes</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                                
                                </div>
                                <div class="choose">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/productos/FILTRACIÓN Y LUBRICACIÓN/ACEITES/4601.jpg" alt="" />
                                        <h2>4601</h2>
                                        <p>Aceite Lubricante</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                                
                                    <!--<img src="images/home/new.png" class="new" alt="" />-->
                                </div>
                                <div class="choose">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/productos/FILTRACIÓN Y LUBRICACIÓN/ACEITES/4603.jpg" alt="" />
                                        <h2>4603</h2>
                                        <p>Comma 151177 Mobil Súper 3000</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                                
                                    <!--<img src="images/home/sale.png" class="new" alt="" />-->
                                </div>
                                <div class="choose">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/productos/FILTRACIÓN Y LUBRICACIÓN/FILTROS/4900.jpg" alt="" />
                                        <h2>4900</h2>
                                        <p>Filtro de Aceite</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                                
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div><!--features_items-->
                    
                    
                    
                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">PRODUCTOS RECOMENDADOS</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">   
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/FERRETERIA/AGRÍCOLA/1600.Jpg" alt="" />
                                                    <h2>1600</h2>
                                                    <p>Azadones</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/SEGURIDAD INDUSTRIAL/PROTECCIÓN PARA PIES Y PIERNAS/7003.jpg" alt="" />
                                                    <h2>7003</h2>
                                                    <p>Botas Centauro DIN</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/SEGURIDAD INDUSTRIAL/PROTECCIÓN RESPIRATORIA/7300.jpg" alt="" />
                                                    <h2>7300</h2>
                                                    <p>Pieza Facial Media Cara</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/SEGURIDAD INDUSTRIAL/PROTECCIÓN CORPORAL/6105.jpg" alt="" />
                                                    <h2>6105</h2>
                                                    <p>Chaleco Clase II MOD</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/SEGURIDAD INDUSTRIAL/PROTECCIÓN CONTRA CAÍDAS/5802.jpg" alt="" />
                                                    <h2>5802</h2>
                                                    <p>Eslinga Doble con Amortiguador</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <<div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/productos/SEGURIDAD INDUSTRIAL/PROTECCIÓN DE CABEZA Y ROSTRO/6419.jpg" alt="" />
                                                    <h2>6419</h2>
                                                    <p>Lentes Sensibles a la Luz</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
                    </div><!--/recommended_items-->
                    
                </div>
            </div>
        </div>
    </section>

        <?= $content ?>
    </div>
</div>

    <footer id="footer"><!--Footer-->
        
        
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
        
        

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Distri</span></h2>
                            <h2><span></span>herramientas</h2>

                            <p></p>
                        </div>
                    </div>

                    <div class="col-sm-7">
                    
                    
                        <div class="col-sm-">
                            <div class="leftbrands">
                                <br>
                                </br>
                                <div class="marcas">
                                    <div align="center"><img src="images/home/marcas.png" alt="CRC, Terpel, Abracol, Loctite, Herragro, Dewalt, BAD, Bosch, Irwin, Stanley, Ideace, Dremert, Skil, Donaldson, Incolma, Atila, Black & Decker"/></div>
                                </div>
                            </div>
                        </div>
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

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2016 Distriherramientas S.A.S All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">ADSI</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
