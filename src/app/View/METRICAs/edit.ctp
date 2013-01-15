<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/METRICAs/index">M&eacute;tricas</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="mETRICAs form">
<?php echo $this->Form->create('METRICA'); ?>
	<fieldset>
		<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Editar m&eacute;trica'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('METRICA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('METRICA.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Ver M&eacute;tricas'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('para_propuesta');
		echo $this->Form->input('para_proyecto');
		echo $this->Form->input('para_servicio');
		echo $this->Form->input('unidades');
		echo $this->Form->input('dominio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('METRICA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('METRICA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
