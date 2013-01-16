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
				<a class="brand" href="/"><img src="logo.png" style="width:auto;height: 24px;"class="img-square">SIT</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<? 
						$navigation->renderSubTree('topbar',$requested);
					?>
						<li class=" "><a href="#">Navegaci&oacute;n</a></li>
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
							<a class="btn btn-warning" href="/NOTIFICACIONs/">
							  	<i class="icon-envelope icon-white"></i>
							    <?=count($notificacion) ?>
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