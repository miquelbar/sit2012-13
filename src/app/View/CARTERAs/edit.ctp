<ul class="breadcrumb">
  <li><a href="/CARTERAs/index">Cartera</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="cARTERAs form">
<?php echo $this->Form->create('CARTERA'); ?>
	<fieldset>
		<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Editar cartera'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CARTERA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CARTERA.id'))); ?></li>
						<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<?php
		echo $this->Form->input('id');
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
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CARTERA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CARTERA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
