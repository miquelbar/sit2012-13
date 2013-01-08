<div class="uSUARIOs form">
<?php echo $this->Form->create('USUARIO'); ?>
	<fieldset>
		<legend><?php echo __('Editar usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('USUARIO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('USUARIO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
