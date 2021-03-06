<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title></title>
    <link href="/css/frontend/estilos.css" rel="stylesheet" type="text/css" />
    <!--[if gte IE 8]>
    <link rel="stylesheet" type="text/css" href="/css/frontend/ie.css" />
    <![endif]-->
  
    <script type="text/JavaScript">
    <!--
    function MM_swapImgRestore() { //v3.0
      var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    
    function MM_preloadImages() { //v3.0
      var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
    }
    
    function MM_findObj(n, d) { //v4.01
      var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
	d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
      if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
    }
    
    function MM_swapImage() { //v3.0
      var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
       if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
    //-->
    </script>
  </head>
  
<body style="width:100%;">
	<div id="contenido">
	
		<div id="cabecera">
			<div id="logo">
				<a href="index.html"><img src="/img/frontend/logo.jpg" width="244" height="84" alt="Parc de Collserola" /></a>
			</div><!--Fin logo-->
			
			<div class="cab_derecha">
				<div id="menuCabecera">
				   <?=$tree->generate($menu_top_pages, array('class' => 'menuArriba menuArriba-horizontal', 'element' => 'frontend/menu-top'))?> 
				</div><!--Fin menuCabecera-->
				
				<div id="buscador">
					<span><input type="text" name="buscador" value="cercar" tabindex="1" class="textinput" /></span>
					<span><a href="#"><img src="/img/frontend/lupa.png" width="13" height="13" alt="Buscador" /></a></span><br/>
					<span><img src="/img/frontend/line_search.png" width="145" height="4" alt="Buscador" /></span>
				</div><!--Fin buscador-->
			</div>
		</div><!--Fin cabecera-->
		
		<div id="menu">
		  <?=$tree->generate($menu_bottom_pages, array('id' => 'nav', 'class' => 'dropdown dropdown-horizontal', 'element' => 'frontend/menu-bottom'))?>
		</div><!--Fin menu-->
		
		<div id="contenedor">		
			<div id="menuIdiomas">
				<ul>
				    <?php $lang = Configure::read('Config.language'); ?>
				    <li><a href="/language/change/cat" <?=$lang == 'cat' ? 'style="text-decoration:underline"' : ''?>><span>CATAL�</span></a></li>
				    <li><a href="/language/change/spa" <?=$lang == 'spa' ? 'style="text-decoration:underline"' : ''?>><span>ESPA�OL</span></a></li>
				    <li><a href="/language/change/eng" <?=$lang == 'eng' ? 'style="text-decoration:underline"' : ''?>><span>ENGLISH</span></a></li>
				</ul>
			</div><!--Fin menuIdiomas-->
			
                        <?=$content_for_layout?>
			
		</div><!--Fin contenedor-->
		
		<div id="pie">
			<p class="izquierda" style="margin-top:15px;">CONSORCI DEL PARC DE COLLSEROLA. CRTA. DE L'ESGLESIA, 92. 08017 BARCELONA</p>
			<p class="izquierda"><img src="/img/frontend/diputacion.jpg" width="91" height="32" alt="Diputacion" />
			<img src="/img/frontend/metro.jpg" width="157" height="30" alt="Metro" /></p>
			<p class="linea derecha"><a href="#"><span>MAPA WEB</span></a><a href="#"><span>CONTACTO</span></a><a href="#"><span>AVISOS LEGALES</span></a></p>
		</div><!--Fin pie-->
	</div><!--Fin contenido-->
</body>
</html>
