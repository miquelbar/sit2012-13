<div class="nOTIFICACIONs form">
<?php echo $this->Form->create('NOTIFICACION'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit N O T I F I C A C I O N'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('tipo_notificacion_id');
		echo $this->Form->input('texto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NOTIFICACION.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>
	</ul>
</div>
