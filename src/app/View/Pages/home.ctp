<? $perfiles = array_flip($usuario['perfiles']); ?>
									

<div class="row">
	<div class="span3">
		<div class="accordion" id="accordion3">
			<?
				if (isset($perfiles['1'])) { //Admin
			?>
			 <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseOne">
						<strong>Opciones de Administrador</strong>
					</a>
				</div>
				<div id="icollapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						<ul>							
	                  		<li><a href="/AREAFUNCIONALs">&Aacute;reas Funcionales</a></li>
	                  		<li><a href="/PERSONAs">Personas</a></li>
	                  		<li><a href="/USUARIOs">Usuarios</a></li>
	                  		<li><a href="/TIPONOTIFICACIONs">Tipo Notificaciones</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<? if (isset($perfiles['2'])) { //Solicitante ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseTwo">
						<strong>Opciones de Solicitante</strong>
					</a>
				</div>
				<div id="icollapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li><a href="/PROPUESTa/mispropuestas">Mis Propuesta</a></li>
				            <li><a href="/PROPUESTa/crear">Solicitar Propuesta</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<? if (isset($perfiles['3'])) { //CIO ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseThree">
						<strong>Opciones de CIO	</strong>
					</a>
				</div>
				<div id="icollapseThree" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li><a href="/PROPUESTa/pendientescio?t=5">Propuestas Pendientes de Valorar</a></li>
	                  		<li><a href="/PROPUESTa/pendientescio?t=8">Propuestas Pendientes de Tramitar</a></li>
	                  		<li><a href="/PROPUESTa/pendientescio?t=7">Convertir Propuestas en Proyectos</a></li>
	                  		<li><a href="/PROYECTOs">Proyectos</a></li>
	                  		<li><a href="/SEVICIOs">Servicios</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<? if (isset($perfiles['4'])) { //Responsable ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseFour">
						<strong>Opciones de Responsable</strong>
					</a>
				</div>
				<div id="icollapseFour" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li><a href="/PROYECTOs/?t=r">Mis Proyectos</a></li>
				            <li><a href="/SERVICIOs/?t=r">Mis Servicios</a></li>
				            <li><a href="/PROPUESTa/miresponsabilidad">Propuestas que patrocino</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<? if (isset($perfiles['5'])) { //Patrocinador ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseFive">
						<strong>Opciones de Patrocinador</strong>
					</a>
				</div>
				<div id="icollapseFive" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li><a href="/PROYECTOs/?t=p">Mis proyectos</a></li>
	                  		<li><a href="/PROPUESTa/mispatrocinadas">Propuestas Patrocinadas</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<? if (isset($perfiles['4'])) { //T&eacute;cnico ?>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#icollapseSix">
						<strong>Opciones de T&eacute;cnico</strong>
					</a>
				</div>
				<div id="icollapseSix" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
				            <li><a href="/PROPUESTa/pendientes">Propuestas pendientes de valorar</a></li>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
		</div>
	</div>
	<div class="span6">
		<div id="imgHOver" style="position: relative;width: 500px; margin: 0 auto;">
			<!--top-->
				<!--left -->
				<div><img src="/iso38500.png" style="width: 500px; height: 457px;"></div>
				<!--<div style="position: absolute; left:25px; top: 0px;">
					<div class="box box_top"><a href="#topleft">&nbsp;	</a></div>
				</div>-->
				<!-- right -->
				<!--<div style="position: absolute; left:375px; top: 0px;">
					<div class="box box_top"><a href="#topright">&nbsp;	</a></div>
				</div>-->
			<!--/top-->
			<!--top bottom-->
				<!-- left -->
				<div style="position: absolute; left:78px; top: 132px;">
					<div class="box box_top_bottom"><a href="#topbottomleft">&nbsp;	</a></div>
				</div>
				<!-- right -->
				<div style="position: absolute; left:322px; top: 130px;">
					<div class="box box_top_bottom"><a href="#topbottomright">&nbsp;	</a></div>
				</div>
				<!-- top -->
				<div style="position: absolute; left:205px; top: 90px;">
					<div class="box box_top_bottom"><a href="#topbottomtop">&nbsp;	</a></div>
				</div>
			<!--/top bottom-->
			<!-- middle-->
				<!--left-->
				<div style="position: absolute; left:83px; top: 163px;">
					<div class="box box_middle"><a href="#middleleft">&nbsp;	</a></div>
				</div>
				<!--rigth-->
				<div style="position: absolute; left:328px; top: 163px;">
					<div class="box box_middle"><a href="#middleright">&nbsp;	</a></div>
				</div>
				<!--center-->
				<div style="position: absolute; left:212px; top: 130px;">
					<div class="box box_middle" style="width:82px; height:180px;"><a href="#middlecenter">&nbsp;	</a></div>
				</div>
			<!-- /middle-->
			<!--bottom-->
				<!--left-->
				<div style="position: absolute; left:15px; top: 330px;">
					<div class="box box_bottom"><a href="/PROYECTOs">&nbsp;	</a></div>
				</div>
				<!--right-->
				<!--<div style="position: absolute; left:260px; top: 328px;">
					<div class="box box_bottom"><a href="#bottomright">&nbsp;	</a></div>
				</div>-->
			<!--/bottom-->
		</div>
	</div>
	<div class="span3">
		<div class="accordion" id="accordion2">
			 <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						<strong>Principios TIC</strong>
					</a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						<ul>
						<?
						
						foreach ($principios as $key => $principio) {
							
							?>
							<li><?=$principio['PRINCIPIOTIC']['nombre']?></li>
							<?
						}
						
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<strong>Objetivos Estratégicos</strong>
					</a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
						<?
						
						foreach ($estrategicos as $key => $objetivo) {
							
							?>
							<li><?=$objetivo['OBJETIVOESTRATEGICO']['nombre']?></li>
							<?
						}
						
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						<strong>Objetivos Táctico</strong>
					</a>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
						<?
						
						foreach ($tacticos as $key => $tactico) {
							
							?>
							<li><?=$tactico['OBJETIVOTACTICO']['nombre']?></li>
							<?
						}
						
						?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

	$(document).ready(function(){
		$(".box").hover(
			function() {
				$(this).stop().animate({"opacity": ".3"}, "slow");
			},
			function() {
				$(this).stop().animate({"opacity": "0"}, "slow");
		});
		$(".box_top").click(function(){
	     	window.location=$(this).find("a").attr("href"); 
		    return false;
		});
		$(".box_top_bottom").click(function(){
	     	window.location=$(this).find("a").attr("href"); 
		    return false;
		});
		$(".box_middle").click(function(){
	     	window.location=$(this).find("a").attr("href"); 
		    return false;
		});
		$(".box_bottom").click(function(){
	     	window.location=$(this).find("a").attr("href"); 
		    return false;
		});
		$(".box_top").mouseover(function() {
	    	$(this).fadeIn("slow");
		});

	});

	
</script>