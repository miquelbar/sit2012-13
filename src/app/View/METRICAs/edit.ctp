<div class="mETRICAs form">
<?php echo $this->Form->create('METRICA'); ?>
	<fieldset>
		<legend><?php echo __('Edit M E T R I C A'); ?></legend>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('METRICA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('METRICA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?></li>
	</ul>
</div>
