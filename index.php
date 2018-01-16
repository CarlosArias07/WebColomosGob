<!DOCTYPE html>
<html lang="es">

	<head>
		<title>CETI COLOMOS</title>
		<!--  META TAGS -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<!--  ESTILOS  -->
        <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/carousel2.css">
        <link rel="stylesheet" type="text/css" href="css/imagegallery.css">
	</head>

	<body>
        <!-- CONTENIDO A PARTIR DE AQUI -->
        <?php include_once('menu.html'); ?>

        <!-- CARRUSEL -->
        <section class="slider_articles">
        <div class="container">
            <!-- Indicators -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="imagenes/noticias/4.jpg" alt="Chania">
                        <div class="carousel-caption">
                            <h3>Título de Noticia</h3>
                            <p>Texto breve descriptivo de Noticia</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imagenes/noticias/6.jpg" alt="Chania">
                        <div class="carousel-caption">
                            <h3>Título de Noticia</h3>
                            <p>Texto breve descriptivo de Noticia</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="imagenes/noticias/5.jpg" alt="Flower">
                        <div class="carousel-caption">
                            <h3>Título de Noticia</h3>
                            <p>Texto breve descriptivo de Noticia</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        </section>
        <!-- FIN CARRUSEL -->

        <!-- SUB-MENU -->
        <nav class="havbar navbar-inverse sub-navbar navbar-" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
                        <span class="sr-only">Interruptor de Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/WebColomosGob/index.php">
                    <img src="imagenes/index/logo_ceti.png" class="img img-responsive">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="subenlaces">
                    <ul class="nav subnav navbar-nav navbar-right">
                        <li><a class="sombrear" href="/WebColomosGob/templates/ofertaEducativa/ofertaEducativa.php#tec">Carreras Tecnólogo</a></li>
                        <li><a class="sombrear" href="/WebColomosGob/templates/ofertaEducativa/ofertaEducativa.php#ing">Carreras Ingeniería</a></li>
                        <li><a class="sombrear" href="https://aspirantes.ceti.mx" target="_blank">Trámites Aspirantes</a></li>
                        <li><a class="sombrear" href="https://ase1.ceti.mx/tecnologo/" target="_blank">Ingreso al Sistema Escolar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- FIN SUB-MENU -->

        <br>

        <!-- PAGINA ACTUAL -->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="icon icon-home"></i></a></li>
                    <li class="active"><a href="index.html">Inicio</a></li>
                </ol>
            </div>
            <hr>
        </div>
        <!-- FIN PAGINA ACTUAL -->

        <!-- NOTICIAS RECIENTES -->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <a href="/WebColomosGob/templates/aspirantes/cursoPropedeutico.php"><img class=".img-responsive" src="imagenes/index/alumnos.jpg" alt="alumnos" width="265" height="200"></a>
                    <a href="/WebColomosGob/templates/aspirantes/cursoPropedeutico.php"><img class=".img-responsive" src="imagenes/index/alumnos2.jpg" alt="alumnos" width="265" height="200"></a>
                    <a href="/WebColomosGob/templates/aspirantes/cursoPropedeutico.php"><img class=".img-responsive" src="imagenes/index/alumnos3.jpg" alt="alumnos" width="265" height="200"></a>
                    <a href="/WebColomosGob/templates/conoceCeti/calendarioEscolar.php"><img class=".img-responsive" src="imagenes/index/calendario.jpg" alt="alumnos" width="265" height="200"></a>
					 
					<div class="col-md-12 col-sm-12 col-xs-12">                                              
                        <h3 class="top-buffer">Noticias recientes</h3>
                        <hr class="red"></hr>
                            <div class="gallery">
                                <a target="_blank" href="imagenes/index/alumnos.jpg">
                                    <img src="imagenes/index/noticias1.jpg" alt="Fjords" width="300" height="200">
                                </a>
                                <div class="desc">
                                    <h4>Título de Noticia</h4>
                                    Fecha de publicación de Noticia 
                                </div>
                            </div>

                            <div class="gallery">
                                <a target="_blank" href="imagenes/index/alumnos.jpg">
                                    <img src="imagenes/index/noticias2.jpg" alt="Fjords" width="300" height="200">
                                </a>
                                <div class="desc">
                                    <h4>Título de Noticia</h4>
                                    Fecha de publicación de Noticia
                                </div>
                            </div>

                            <div class="gallery">
                                <a target="_blank" href="imagenes/index/alumnos.jpg">
                                    <img src="imagenes/index/noticias3.jpg" alt="Fjords" width="300" height="200">
                                </a>
                                <div class="desc">
                                    <h4>Título de Noticia</h4>
                                    Fecha de publicación de Noticia
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12 clearfix top-buffer">
                        <a class="pull-right" href="noticias.php">ver historial</a>
                    </div>
            </div>
        </div>
        <!-- FIN NOTICIAS RECIENTES -->

        <!-- SITIOS Y NOTAS DE INTERES -->
        <section class="structure dependency bottom-buffer clearfix list-article slider_articles" >
            <div class="container" >
                <div class="col-md-12 col-sm-12 col-xs-12 notas">
                        <h3 class="top-buffer ">Sitios y notas de interés</h3>
                        <hr class="red"></hr>
                </div>
                <div id="notas" class="row carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class='item active'>
                            <ul class='thumbnails'>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='imagenes/sitiosInteres/3116bannercalendarioserviciosactividadescademicas.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>Calendario de Servicios y Actividades académicas 2017-2018</h4>
                                        <p>Calendario de Servicios y Actividades académicas 2017-2018</p>
                                        <a class='btn btn-success btn-mini' href='noticia.php?id=1112'>Ver</a>
                                    </div>
                                </li>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='imagenes/sitiosInteres/2404bannercalendarioescolar2017-2018.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>Calendario Escolar 2017-2018</h4>
                                        <p>Consulta el Calendario Escolar 2017-2018</p>
                                        <a class='btn btn-success btn-mini' href='noticia.php?id=1111'>Ver</a>
                                    </div>
                                </li>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='imagenes/sitiosInteres/205145aniversario.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>45° Aniversario CETI </h4>
                                        <p></p>
                                        <a class='btn btn-success btn-mini' href='http://direcciondesarrollo.ceti.mx/historico/'>Ver</a>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class='item'>
                           <ul class='thumbnails'>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='img/noticias/1934anuies.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>ANUIES</h4>
                                        <p>Carta universitaria</p>
                                        <a class='btn btn-success btn-mini' href='http://archivos.ceti.mx/wwwceti/ANUIES.pdf'>Ver</a>
                                    </div>
                                </li>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='img/noticias/2910laboratorio-de-metrologia.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>Laboratorio de metrología</h4>
                                        <p>Conoce nuestros servicios</p>
                                        <a class='btn btn-success btn-mini' href='articulo.php?id=230'>Ver</a>
                                    </div>
                                </li>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='img/noticias/3807contraloria-social.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>BECAS</h4>
                                        <p>Contraloría social</p>
                                        <a class='btn btn-success btn-mini' href='articulo.php?id=211'>Ver</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- FIN SLIDE 2 -->
                        <div class='item'>
                           <ul class='thumbnails'>

                                <li class='col-md-3 col-sm-3 col-xs-3'>
                                    <div class='thumbnail'>
                                        <a href='#'><img src='img/noticias/06283742bolsa_trabajo.jpg'  height='208px'></a>
                                    </div>
                                    <div class='caption-box'>
                                        <h4>Bolsa de trabajo</h4>
                                        <p>Bolsa de trabajo CETI</p>
                                        <a class='btn btn-success btn-mini' href='http://bolsa.ceti.mx'>Ver</a>
                                    </div>
                                </li>

                            </ul> 
                        </div>
                    </div>
                    <!-- Control box -->
                    <div class="control-box">
                        <a data-slide="prev" href="#notas" >‹</a>
                        <a data-slide="next" href="#notas" class="carousel-control right">›</a>
                    </div><!-- /.control-box -->
                    <!-- /#myCarousel -->
                </div>                              
                <!-- /Wrapper for slides .carousel-inner -->  

            </div>
        </section>
        <!-- FIN SITIOS Y NOTAS DE INTERES -->

        <!-- SITIOS DE INTERES -->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3 class="top-buffer">Temas de interés</h3>
                <hr class="red"></hr>
                <div class='col-md-12'><div class='col-md-6'><a href='noticia.php?id=892' target='_blank'><p class='titulo'>Calendario Escolar 2017-2018</p></a><p class='descripcion'>Te invitamos a conocer el nuevo periodo escolar del CETI</p><a href='noticia.php?id=875' target='_blank'><p class='titulo'>Comité de Ética y Prevención de Conflictos de Interés del CETI</p></a><p class='descripcion'>Comité de Ética y Prevención de Conflictos de Interés del CETI</p><a href='noticia.php?id=621' target='_blank'><p class='titulo'>Inicia operación Plantel Río Santiago</p></a><p class='descripcion'>Notas referentes a nuestro nuevo plantel</p><a href='noticia.php?id=573' target='_blank'><p class='titulo'>PDMP 2014</p></a><p class='descripcion'>Programa de Desarrollo de Mediano Plazo 2014 - 2018</p><a href='noticia.php?id=545' target='_blank'><p class='titulo'>CÓDIGO DE CONDUCTA</p></a><p class='descripcion'>Nuestro compromiso con la sociedad</p></div><div class='col-md-6'><a href='noticia.php?id=293' target='_blank'><p class='titulo'>Equidad entre Hombres y Mujeres</p></a><p class='descripcion'>Conoce nuestra sección de Equidad, en donde encontrarás todo lo relacionado con las estrategias camino a la certificación en la Norma Mexicana para la Igualdad Laboral entre Mujeres y Hombres</p><a href='noticia.php?id=263' target='_blank'><p class='titulo'>Sala de Prensa</p></a><p class='descripcion'>Sala de Prensa (veda electoral)</p><a href='noticia.php?id=30' target='_blank'><p class='titulo'>   Manuales de la Administración Pública Federal</p></a><p class='descripcion'>Consulta los manuales de la Administración Pública Federal...</p><a href='noticia.php?id=25' target='_blank'><p class='titulo'>Metas Institucionales</p></a><p class='descripcion'> </p></div>          </div>
                <br>
                <br>
        </div>
        <!-- FIN SITIOS DE INTERES -->
        <br>
        <br>
        <br>

        <!-- UBICACION -->
        <div class="ubicacion">
            <h3 class="top-buffer">Ubicación y contacto</h3>
            <hr class="red"></hr>
            <div class="col-md-12">
                <iframe name="mapa" class="mapa" width="1100px" 
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDkmcLsyAlGj2ktTYTX_ZhAxLSyGirkV3A
                    &q=CETI+Colomos,Guadalajara+MX&maptype=satellite" allowfullscreen>
                </iframe>
            </div>
        </div>
        <!-- FIN UBICACION -->


        <!-- FINAL CONTENIDO -->
        <!--<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>-->
		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</body>
</html>