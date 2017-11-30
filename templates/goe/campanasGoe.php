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
        <link rel="stylesheet" type="text/css" href="../../css/carousel.css">
        <link rel="stylesheet" type="text/css" href="../../css/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../css/imagegallery.css">
		<link rel="stylesheet" type="text/css" href="../../css/principales.css">
		<link rel="stylesheet" type="text/css" href="../../css/gallery.css">
		<link rel="stylesheet" type="text/css" href="../../css/conjuntoImagen.css" media="screen" />
        <!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
	</head>
    <script type="text/javascript">
//<![CDATA[
var gal = {
init : function() {
if (!document.getElementById || !document.createElement || !document.appendChild) return false;
if (document.getElementById('gallery')) document.getElementById('gallery').id = 'jgal';
var li = document.getElementById('jgal').getElementsByTagName('li');
li[0].className = 'active';
for (i=0; i<li.length; i++) {
li[i].style.backgroundImage = 'url(' + li[i].getElementsByTagName('img')[0].src + ')';
li[i].title = li[i].getElementsByTagName('img')[0].alt;
gal.addEvent(li[i],'click',function() {
var im = document.getElementById('jgal').getElementsByTagName('li');
for (j=0; j<im.length; j++) {
im[j].className = '';
}
this.className = 'active';
});
}
},
addEvent : function(obj, type, fn) {
if (obj.addEventListener) {
obj.addEventListener(type, fn, false);
}
else if (obj.attachEvent) {
obj["e"+type+fn] = fn;
obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
obj.attachEvent("on"+type, obj[type+fn]);
}
}
}
gal.addEvent(window,'load', function() {
gal.init();
});
//]]>
</script>
	
	
	
	
	
	
	
	
	<body>
        <!-- MENU PRINCIPAL -->
        <?php include_once('../../menu.html'); ?>

        <!-- CONTENIDO A PARTIR DE AQUI -->
        <main class="principal">
        
        <!--  CONTENIDO PÁGINA -->
         
		  <div class='container nota interior ficha'>
		    					<div class='col-md-12 col-sm-12 col-xs-12'>
					                <ol class='breadcrumb'>
					                    <li><a href='../../index.php'><i class='icon icon-home'></i></a></li>
					                    <li><a href='../../index.php'>Inicio</a></li>
					                    <li class='active'><a href='/WebColomosGob/templates/goe/goe.php'>GOE</a></li>
										<li class='active'><a href='/WebColomosGob/templates/goe/campanasGoe.php'>Campañas</a></li>
					                </ol>
					            </div>
								<div class='row'><div class='col-sm-7 pull-left'>
					            		<h2 class='bottom-buffer'>Campañas de GOE</h2>

					            	</div>
					            	<div class='col-md-4 col-xs-12 pull-right '>
									    <!--imagen por encima del menu lateral-->
					            		<img class='img img-responsive' src="../../imagenes/goe/goe_principal.jpg" alt="GOE">
										<!--Menu lateral -->
										<div class='border-box submenu_relacionados'>
									        <h4 class='bottom-buffer'>Submenú de la sección</h4>
									        <hr class='red sitios_relacionados'>
									       	<ul type="circle">	<li><a href="/WebColomosGob/templates/goe/goe.php">¿Quiénes Somos?</a><hr class="sub-hr"></li>
											                    <li><a href="/WebColomosGob/templates/goe/directorioGoe.php" >Directorio</a><hr class="sub-hr"></li>	
											                    <li><a href="/WebColomosGob/templates/goe/serviciosGoe.php">Servicios</a><hr class="sub-hr"></li>
                                                                <li><a href="/WebColomosGob/documentos/goe/programaTrabajoGoe32017.pdf" target="_blank">Programa de Trabajo</a><hr class="sub-hr"></li>																
																<li><a href="/WebColomosGob/templates/goe/contruyeT.php">Contruye-T</a><hr class="sub-hr"></li>
											</ul>
										  <!--<h4 class='bottom-buffer'>Sitios relacionados</h4>
								            <hr class='red sitios_relacionados'>
											<ul>
											<li><a href="http://www.colomos.ceti.mx/">Plantel Colomos</a><hr class="sub-hr"></li>	
											<li><a href="http://www.tonala.ceti.mx/">Plantel Tonalá</a><hr class="sub-hr"></li>	
											<li><a href="http://coeston.ceti.mx/riosantiago">Plantel Río Santiago</a><hr class="sub-hr"></li>
											</ul>-->
									    </div> 

								        <!--<section class='border-box'>
								          <dl>
								  	      	<dt>Autor</dt>
								  	      	<dd>Centro de Enseñanza Técnica Industrial Plantel Colomos</dd>
								  	      	<dt>Fecha de publicación</dt>
								  	      	<dd>2017-10-20 18:40:15</dd>
								          </dl>
								        </section>-->
								    </div>

								    <div class='col-sm-7 pull-left'>
								    	<div class='article-body'>
								    		<hr class='red'>
<h4>Escuela Alerta! </h4>
<div class="style_prevu_kit">
<img class='img img-responsive' src="../../imagenes/goe/escuelaAlerta.png" width="540" height="240" alt="goe" />
</div>
<hr>
<h4>Prevención de Adicciones</h4>
<div class="style_prevu_kit">
 <img class="img img-responsive" src="../../imagenes/goe/prevenAdicciones.jpg"  width="360" height="540" alt="goe" />
 </div>
<p><a href="https://www.youtube.com/watch?v=E5aaZ7eOeHc&feature=youtu.be" target="_blank"> Disfruta la vida </a> </p>

<hr>
<h4>Escuela 100% libre de humo</h4>
<div class="style_prevu_kit">
<a href="http://www.diputados.gob.mx/LeyesBiblio/regley/Reg_LGCT.pdf" target="_blank">
<img class="img img-responsive" src="../../imagenes/goe/libreHumo.png" width="540" height="240" alt="goe" /> </a>
</div>
     
<hr>
<h4>Cultura de Paz y No Violencia</h4>
	 <div class="gallery cf">
  <div>
    <img src="../../imagenes/goe/1nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/2nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/3Nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/4nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/5nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/6nomasviolencia.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/7-seincluyentenoexcluyente.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/8-quientequierenoteagrede.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/9-entusmanoscelular.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/10-hagamos un trato.jpg" />
  </div>
  <div>
    <img src="../../imagenes/goe/11-nomasviolencia.jpg" />
  </div>
</div>
									
								 <div class='col-sm-7 pull-left'>
								    	<div class='article-body'>
								    		<!--<div class='sociales'>
								    			<div class='fb-share-button' data-href='http://ceti.mx/noticia.php?id=48' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fceti.mx%2Fnoticia.php%3Fid%3D48&amp;src=sdkpreparse'>Compartir</a></div>
								    		</div>
								    		<div class='sociales'>
								    			<a href='https://twitter.com/share' class='twitter-share-button' data-size='large' data-show-count='true'>Tweet</a><script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>
								    		</div> -->
								    		<hr class=''>
								    		<p class='ultima_actualizacion'>Ultima actualización: 2017-11-29 16:05:10</p>
								    	</div>
								    </div>
		    					</div>

	    					</div>
		<br>
        <br>
        <br>

        </main>

        <!-- FINAL CONTENIDO -->
		<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
        <script src="js/jquery.js"></script>

        <!-- Dropdown -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootstrap Dropdown Hover JS -->
        <script src="js/bootstrap-dropdownhover.min.js"></script>
		

		


	</body>
</html>