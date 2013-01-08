<div class="uSUARIOs form">
<?php echo $this->Form->create('USUARIO'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo usuario'); ?></legend>
	<?php
		echo $this->Form->input('correo');
		echo $this->Form->input('clave');
		echo $this->Form->input('bloqueado');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('PERFIL');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
