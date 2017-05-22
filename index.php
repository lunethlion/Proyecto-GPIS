<!DOCTYPE html>
<!-- saved from url=(0033)http://moonlightlionheart.esy.es/ -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<?php
	include '/Markdownify-master/src/Converter.php';
	include '/Markdownify-master/src/ConverterExtra.php';
	include '/Markdownify-master/src/Parser.php';
?>
	<title></title>
	<!--<base href="http://moonlightlionheart.esy.es/">--><base href=".">
			<meta name="viewport" content="width=992">
		<meta name="description" content="">
	<meta name="keywords" content="">
		
	<link href="./umhiiti2gpis7_files/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./umhiiti2gpis7_files/jquery-1.11.3.min.js.descarga" type="text/javascript"></script>
	<script src="./umhiiti2gpis7_files/bootstrap.min.js.descarga" type="text/javascript"></script>
	<script src="./umhiiti2gpis7_files/main.js.descarga" type="text/javascript"></script>

	<link href="./umhiiti2gpis7_files/site.css" rel="stylesheet" type="text/css">
	<link href="./umhiiti2gpis7_files/common.css" rel="stylesheet" type="text/css">
	<link href="./umhiiti2gpis7_files/1.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>

<div class="root"><div class="vbox wb_container" id="wb_header">	
<div id="wb_element_instance0" class="wb_element wb_element_shape">
<div class="wb_shp">
</div>
</div>
<div id="wb_element_instance1" class="wb_element" style=" line-height: normal;">
	<h4 class="wb-stl-pagetitle"><strong><span style="color:#ffffff;">XML to HTML Converter</span></strong></h4>
	<h6 href="./whoarewe.html"> about us</h6>
</div>
<div id="wb_element_instance2" class="wb_element wb_element_shape">
	<div class="wb_shp">
	</div>
	</div>
	<div id="wb_element_instance3" class="wb_element wb_element_shape"><div class="wb_shp">
	</div>
	</div>
	<div id="wb_element_instance4" class="wb_element wb_element_picture" href="./umhiiti2gpis7.html">
		<img alt="gallery/menuicon" src="./umhiiti2gpis7_files/8f936973395bae3b3e089f16d9b29c44_60x60.png">
	</div>
	
	<div id="wb_element_instance5" class="wb_element wb_element_shape">
	
		<form action="./index.php" method="post" target="_blank">
		  <p><textarea name="area_izquierda" placeholder="Introduce el texto en HTML" cols="74" rows="24"></textarea>
		  <input type="submit" value="Transformar"/>
		  </p>
		</form>
		<form enctype="multipart/form-data" action="./convarchivo.php" method="POST" >
		  Archivo XML: <input name="archivo" type="file" />
			  <input type="submit" value="Enviar" />
		</form >
	</div>
	
	<div id="wb_element_instance6" class="wb_element wb_element_shape">
	
		<form action="./index.php" method="post" target="_blank">
		<?php
		
		echo '<textarea name="area_derecha" placeholder="Resultado de la transformacion" cols="74" rows="24">';
		if (isset($_POST["area_izquierda"]) && !empty($_POST["area_izquierda"]))
		{
			$converter = new Markdownify\Converter;
			$markdown = $converter->parseString($_POST["area_izquierda"]);
			echo $markdown;
		}		
		
		echo "</textarea>";
		?>
		</form>
	</div>
	<div id="wb_element_instance7" class="wb_element" style=" line-height: normal;">
		<h3 class="wb-stl-heading3">HTML Input</h3>
	</div>
	<div id="wb_element_instance8" class="wb_element" style=" line-height: normal;">
		<h3 class="wb-stl-heading3">Markdown Output</h3>
	</div>
	</div>

<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance9" class="wb_element" style="width: 100%; display: none;">
	<script type="text/javascript">
		$(function() {
			$("#wb_element_instance9").hide();
		});
	</script>
</div></div>

<div class="vbox wb_container" id="wb_footer" style="height: 74px;">
	
</div><div class="wb_sbg"></div></div>

<div id="UMS_TOOLTIP" style="position: absolute; cursor: pointer; z-index: 2147483647; background: transparent; top: -100000px; left: -100000px;">
</div>
</body>
<umsdataelement id="UMSSendDataEventElement"></umsdataelement>
</html>

