<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/CARTERAs/index">Carteras</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;dir<span class="divider">/</span></li>
</ul>
<div class="cARTERAs form">
		<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('A&ntilde;adir cartera'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('CARTERA'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('fecha_creacion');
		echo $this->Form->input('fecha_inicio_periodo');
		echo $this->Form->input('fecha_fin_periodo');
		echo $this->Form->input('fecha_ultima_discusion');
		echo $this->Form->input('fecha_obtencion_definitiva');
		echo $this->Form->input('fecha_inicio_validez');
		echo $this->Form->input('fecha_fin_validez');
		echo $this->Form->input('fecha_ultima_modificacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
