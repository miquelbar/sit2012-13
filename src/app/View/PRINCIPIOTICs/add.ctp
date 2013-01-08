<div class="pRINCIPIOTICs form">
<?php echo $this->Form->create('PRINCIPIOTIC'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Principio TIC'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Crear', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar principios TIC'), array('action' => 'index')); ?></li>
	</ul>
</div>
