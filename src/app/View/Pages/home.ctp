<div class="row">
	<div class="span3">
		<div class="accordion" id="accordion2">
			 <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						<strong>X</strong>
					</a>
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						<ul>
							<li>TEST</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<strong>X</strong>
					</a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li>TEST</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						<strong>X</strong>
					</a>
				</div>
				<div id="collapseThree" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul>
							<li>TEST</li>
						</ul>
					</div>
				</div>
			</div>
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