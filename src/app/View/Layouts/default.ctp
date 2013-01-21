<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="UTF-8">
	<title>SIT</title>
	<!--<link href="css/repasa.css" media="screen" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.js"></script>-->
	<?php 
		//HEAD ELEMENTS
		
		echo $this->Html->meta('icon');

		echo $this->Html->css('repasa.css');
		echo $this->Html->css('bootstrap.css');
		
		echo $this->Html->script('jquery-1.8.2.min.js');
		echo $this->Html->script('bootstrap.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	<style type="text/css" scoped="scoped">
		.box {
			background: black;
			opacity: .0;
		}
		.box_top{
			width: 100px;
			height: 115px;
			cursor: pointer;
			overflow: hidden;
		}
		.box_top_bottom {
			width: 100px;
			height: 28px;
			cursor: pointer;
			overflow: hidden;
		}
		.box_middle{
			width: 90px;
			height: 150px;
			cursor: pointer;
			overflow: hidden;
		}
		.box_bottom{
			width: 225px;
			height: 85px;
			cursor: pointer;
			overflow: hidden;
		}
		
	</style>
  </head>
  <body>
	<div id="top-bar" class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="/"><img src="/logo.png" style="width:auto;height: 24px;"class="img-square">SIT</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<? 
						if (!isset($usuario)) {
							$navigation->renderSubTree('topbar-nouser',$requested);
						} else {
							$navigation->renderSubTree('topbar',$requested);
						
					?>
						<li>
							<div class="btn-group">
				                <button class="btn btn-link dropdown-toggle" style="color:#777;" data-toggle="dropdown">Ir a... <span class="caret"></span></button>
				                <ul class="dropdown-menu">
				                  <!--<li><a href="/AREAFUNCIONALs">&Aacute;rea Funcional</a></li>-->
				                  <!--<li><a href="/AREAPERSONAs">&Aacute;rea Persona</a></li>-->
				                  <li><a href="/CARTERAs">Carteras</a></li>
				                  <li><a href="/METRICAs">M&eacute;tricas</a></li>
				                  <li><a href="/OBJETIVOESTRATEGICOs">Objetivos Estrat&eacute;gicos</a></li>
				                  <li><a href="/OBJETIVOTACTICOs">Objetivos T&aacute;cticos</a></li>
				                  <li><a href="/PERSONAs">Personas</a></li>
				                  <li><a href="/PRINCIPIOTICs">Principios TIC</a></li>
				                  <li><a href="/PROPUESTa">Propuestas</a></li>
				                  <li><a href="/PROYECTOs">Proyectos</a></li>
				                  <li><a href="/SERVICIOs">Servicios</a></li>
				                  <li><a href="/USUARIOs">Usuarios</a></li>
				                </ul>
				              </div>
						</li>
						<li>
							<div class="btn-group">
								<? if (count($usuario['perfiles']) > 0) { ?>
				                <button class="btn btn-link dropdown-toggle" style="color:#777;" data-toggle="dropdown">Acceso a... <span class="caret"></span></button>
				                <ul class="dropdown-menu">
				                	<?  $perfiles = array_flip($usuario['perfiles']); 
										$anterior = false;
				                		if (isset($perfiles['1'])) { //Admin
				                			$anterior = true;
				                	?>
				                		<li style="margin-left: 10px;"><strong>Opciones de Administrador</strong></li>
				                		<li class="divider"></li>
				                  		<li><a href="/AREAFUNCIONALs">&Aacute;reas Funcionales</a></li>
				                  		<li><a href="/PERSONAs">Personas</a></li>
				                  		<li><a href="/USUARIOs">Usuarios</a></li>
				                  		<li><a href="/TIPONOTIFICACIONs">Tipo Notificaciones</a></li>
				                  		
				                  	<? } ?>
				                  	<? if (isset($perfiles['2'])) { //Solicitante
				                  		if ($anterior)  {
				                  	?>
				                  		<li class="divider"></li>
				                  		
				                  		<? } ?>
				                  		<li style="margin-left: 10px;"><strong>Opciones de Solicitante</strong></li>
				                  		<li class="divider"></li>
				                  		<li><a href="/PROPUESTa/mispropuestas">Mis Propuesta</a></li>
				                  		<li><a href="/PROPUESTa/crear">Solicitar Propuesta</a></li>
				                  	<? 
				                  			$anterior = true; 
										} 
									?>
				                  	<? if (isset($perfiles['3'])) { //CIO 
				                  		if ($anterior) {
				                  	?>
				                  		<li class="divider"></li>
				                  		<? } ?>
				                  		<li style="margin-left: 10px;"><strong>Opciones de CIO</strong></li>
				                  		<li class="divider"></li>
				                  		<li><a href="/PROPUESTa/pendientescio?t=5">Propuestas Pendientes de Valorar</a></li>
				                  		<li><a href="/PROPUESTa/pendientescio?t=8">Propuestas Pendientes de Tramitar</a></li>
				                  		<li><a href="/PROPUESTa/pendientescio?t=7">Convertir Propuestas en Proyectos</a></li>
				                  		<li><a href="/PROYECTOs">Proyectos</a></li>
				                  		<li><a href="/SERVICIOs">Servicios</a></li>
				                  	<? 
				                  			$anterior = true;
				                  		} 
				                  	?>
				                  	<? if (isset($perfiles['4'])) { //Responsable 
											if ($anterior) {
				                  	?>
				                  		<li class="divider"></li>
				                  		<? } ?>
				                  		<li style="margin-left: 10px;"><strong>Opciones de Responsable</strong></li>
				                  		<li class="divider"></li>
				                  		<li><a href="/PROYECTOs/?t=r">Mis Proyectos</a></li>
				                  		<li><a href="/SERVICIOs/?t=r">Mis Servicios</a></li>
				                  		<li><a href="/PROPUESTa/miresponsabilidad">Propuestas que patrocino</a></li>
				                  	<? 		$anterior = true; 
										} 
									?>
				                  	<? if (isset($perfiles['5'])) { //Patrocinador 
				                  			if ($anterior) {
				                  	?>
				                  		<li class="divider"></li>
				                  		<? } ?>
				                  		<li style="margin-left: 10px;"><strong>Opciones de Patrocinador</strong></li>
				                  		<li class="divider"></li>
				                  		<li><a href="/PROYECTOs/?t=p">Mis proyectos</a></li>
				                  		<li><a href="/PROPUESTa/mispatrocinadas">Propuestas Patrocinadas</a></li>
				                  	<? $anterior = true; 
										} 
									?>
				                  	<? if (isset($perfiles['6'])) { //Técnico 
				                  			if ($anterior) {
				                  	?>
				                  		<li class="divider"></li>
				                  		
				                  		<? } ?>
				                  		<li style="margin-left: 10px;"><strong>Opciones de T&eacute;cnico</strong></li>
				                  		<li class="divider"></li>
				                  		<li><a href="/PROPUESTa/pendientes">Propuestas pendientes de valorar</a></li>
				                  	<? } ?>
				                </ul>
				                <? } ?>
				              </div>
						</li>
						<? } ?>
					</ul>
				    <!--<form class="navbar-form pull-right">
					    <input type="text" class="span2">
					    <button type="submit" class="btn">Buscar</button>
				    </form>	-->	
				    <ul class="nav pull-right">
				    	<li><div class="divider-vertical"></div></li>
				    	<? 
				    		if (!isset($usuario)) {
						?>
							<li><div><a href="/usuario/login/" class="btn btn-info">Login</a></div></li>
						<? } else { ?>
							<li>
							<div class="btn-group">
								<? $num = count($notificacion);
									$class = 'btn-warning'; 
							    	if ($num==0)
										$class= "btn-success";
									else if ($num > 0 && $num<10) {
										$class= "btn-warning";
									} else {
										$class= "btn-danger";
									}
									
							    ?>
							<a class="btn <?=$class;?>" href="/NOTIFICACIONs/">
							  	<i class="icon-envelope icon-white"></i>
							  	<?=$num;?>
							  </a>
							  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
							  	<i class="icon-user icon-white"></i>
							    <?=$usuario['Persona']['nombre'] ?> (<?= $usuario['correo'] ?>)
							    <span class="caret"></span>
							  </a>
							  <ul class="dropdown-menu">
							    <li><a href="/USUARIOs/view/<?= $usuario['id'] ?>">Informaci&oacute;n de cuenta</a></li>
							    <li><a href="/PERSONAs/view/<?= $usuario['Persona']['id'] ?>">Informaci&oacute;n personal</a></li>
							    <li><a href="#">Bandeja de entrada</a></li>
							    <li><a href="/Usuario/logout">Logout</a></li>
							  </ul>
							</div>
							</li>
							<li>
								
							</li>
							<!--<li><div><a href="/USUARIOs/view/<?= $usuario['id'] ?>" class="btn btn-info"><?=$usuario['Persona']['nombre'] ?>(<?= $usuario['correo'] ?>)</a></div></li>-->
						<? } ?>
						<li><div class="divider-vertical"></div></li>
						<!--<li><div><a href="/usuario/registro/" class="btn btn-primary">Registrate</a></div></li>-->
						<li><div class="divider-vertical"></div></li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="span12">
					<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<hr>
		<footer id="footer">
		    <ul class="nav nav-pills">
			<? 
				$navigation->renderSubTree('footer',$requested);
			?>
		    </ul>			
		</footer>
	</div>
  </body>
</html>