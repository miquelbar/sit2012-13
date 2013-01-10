<div class="tIPONOTIFICACIONs form">
<?php echo $this->Form->create('TIPONOTIFICACION'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit T I P O N O T I F I C A C I O N'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mensaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TIPONOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TIPONOTIFICACION.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
	</ul>
</div>
