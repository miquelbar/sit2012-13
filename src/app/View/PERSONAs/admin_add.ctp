<div class="pERSONAs form">
<?php echo $this->Form->create('PERSONA'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add P E R S O N A'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido1');
		echo $this->Form->input('apellido2');
		echo $this->Form->input('AREA');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('controller' => 'a_r_e_a_p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
