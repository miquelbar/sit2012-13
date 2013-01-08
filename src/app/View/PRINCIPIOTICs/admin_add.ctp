<div class="pRINCIPIOTICs form">
<?php echo $this->Form->create('PRINCIPIOTIC'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add P R I N C I P I O T I C'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('action' => 'index')); ?></li>
	</ul>
</div>
