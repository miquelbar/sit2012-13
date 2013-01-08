<div class="cARTERAs form">
<?php echo $this->Form->create('CARTERA'); ?>
	<fieldset>
		<legend><?php echo __('Add C A R T E R A'); ?></legend>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?></li>
	</ul>
</div>
