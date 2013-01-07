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
		echo $this->Form->input('VALOR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('METRICA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('METRICA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List V A L O R M E T R I C As'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New V A L O R'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
