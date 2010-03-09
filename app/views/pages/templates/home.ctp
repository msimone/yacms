			<div id="imagenes">
				<div class="foto">
					<img src="img/frontend/foto01.png" width="556" height="297" alt="Foto Index Collserola" />
				</div><!--Fin foto-->
				
				<div id="menuImg" class="clear" style="width:328px">
					<div class="izquierda">
						<div class="menuFotos">
							<h4>CENTRE D'INFORMACIÓ</h4>
							<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('informacio','','img/frontend/foto02_otro.png',1)">
								<img src="img/frontend/foto02.png" name="informacio" width="154" height="123" border="0" alt="informacio" />
							</a>						
						</div>
						<!--Fin menuFotos-->
						
						<div class="menuFotos">
							<h4>BULLETÍ</h4>
							<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bulleti','','img/frontend/foto04_otro.png',3)">
								<img src="img/frontend/foto04.png" name="bulleti" width="155" height="123" border="0" alt="bulleti" />
							</a>
						</div><!--Fin menuFotos-->
					</div>
					
					<div class="derecha">
						<div class="menuFotos">
							<h4>RECOMANEM</h4>
							<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('recomenem','','img/frontend/foto03_otro.png',2)">
								<img src="img/frontend/foto03.png" name="recomenem" width="154" height="123" border="0" alt="recomenem" />
							</a>
						</div><!--Fin menuFotos-->
						
						<div class="menuFotos">
							<h4>NOTICIES</h4>
							<div class="caja">
								<?php foreach ($news as $idx => $value) {?>
									<p><a href="/news/<?=$value['News']['slug']?>"><?=$value['News']['title']?></a></p>
								<?php } ?>
								<p align="right"><a href="/news"><span class="noticias">+ NOTICIAS</span></a></p>
							</div>
						</div><!-- Fin noticias-->
					</div>
				</div><!--Fin menuImg-->
			</div><!--Fin imagenes-->
			
			<div id="linea">
				<p>&nbsp;</p>
			</div><!--Fin div-->
			
			<div id="linea2">
				<p>&nbsp;</p>
			</div><!--Fin div-->
			
			<div id="descripcion" style="margin-left: -8px; width: 882px;">
			
			<div style="margin-left: 0px; width: 328px; float:left">
				<div class="izquierda">
					<div>
						<div class="menuFotos izquierda">							
							<ul class="Foto fotoPeq fotoPeq-horizontal">
								<li><h5>CONSORCI</h5>
								<a href="#" class="dir"><img src="img/frontend/foto05.png" width="154" height="49" alt="Historia i cultura" /></a>
									<ul>
										<li class="first">
											<a href="#" class="dir">PATRIMONI HISTORIC - ARTISTIC</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS TRADICIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS DOTACIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">ELEMENTS D'INTERES</a>				
										</li>
									</ul>
								</li>
							</ul>
						</div><!--Fin menuFotos-->
							
						<div class="menuFotos derecha">
							<ul class="Foto fotoPeq fotoPeq-horizontal">
								<li><h5>ESPAI NATURAL</h5>
								<a href="#" class="dir"><img src="img/frontend/foto07.png" width="154" height="49" alt="Espai Natural" /></a>
									<ul>
										<li class="first">
											<a href="#" class="dir">PATRIMONI HISTORIC - ARTISTIC</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS TRADICIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS DOTACIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">ELEMENTS D'INTERES</a>				
										</li>
									</ul>
								</li>
							</ul>
						</div><!--Fin menuFotos-->
					</div>
					
					<div>
						<div class="menuFotos izquierda">
							<ul class="Foto fotoPeq fotoPeq-horizontal">
								<li><h5>HISTÒRIA I CULTURAL</h5>
								<a href="#" class="dir"><img src="img/frontend/foto06.png" width="154" height="49" alt="Historia i cultura" /></a>
									<ul>
										<li class="first">
											<a href="#" class="dir">PATRIMONI HISTORIC - ARTISTIC</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS TRADICIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">EDIFICACIONS DOTACIONALS</a>				
										</li>
										<li class="first">
											<a href="#" class="dir">ELEMENTS D'INTERES</a>				
										</li>
									</ul>
								</li>
							</ul>
						</div><!--Fin menuFotos-->
						
						<div class="menuFotos derecha">
							<h5>MAPA DEL PARC</h5>
							<a href="#"><img src="img/frontend/foto08.png" width="154" height="49" alt="Mapa del parc" /></a>
							
							
						</div><!--Fin menuFotos-->
					</div>
				</div>
				</div>
				<div id="texto" class="derecha" style=" width:550px">
					<?=$self['Page']['content']?>
				</div><!--Fin texto-->
			</div><!--Fin descripcion-->