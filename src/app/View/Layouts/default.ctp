<!DOCTYPE html>
<html lang="es">
  <head>
  	<meta charset="UTF-8">
	<title>S	IT</title>
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
  </head>
  <body>
	<div id="top-bar" class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">sit</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<? 
						$navigation->renderSubTree('topbar',$requested);
					?>
					</ul>
				    <form class="navbar-form pull-right">
					    <input type="text" class="span2">
					    <button type="submit" class="btn">Buscar</button>
				    </form>		
				    <ul class="nav pull-right">
				    	<li><div class="divider-vertical"></div></li>
						<li><div><a href="/login/login/" class="btn btn-info">Login</a></div></li>
						<li><div class="divider-vertical"></div></li>
						<li><div><a href="/usuario/registro/" class="btn btn-primary">Registrate</a></div></li>
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