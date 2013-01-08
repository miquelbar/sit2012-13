<div class="oBJETIVOTACTICOs form">
<?php echo $this->Form->create('OBJETIVOTACTICO'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit O B J E T I V O T A C T I C O'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('objetivo_estrategico_id');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OBJETIVOTACTICO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OBJETIVOTACTICO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O T A C T I C Os'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objetivo Estrategico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
