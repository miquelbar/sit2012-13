<div class="tIPONOTIFICACIONs view">
<h2><?php  echo __('T I P O N O T I F I C A C I O N'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['mensaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit T I P O N O T I F I C A C I O N'), array('action' => 'edit', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete T I P O N O T I F I C A C I O N'), array('action' => 'delete', $tIPONOTIFICACION['TIPONOTIFICACION']['id']), null, __('Are you sure you want to delete # %s?', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T I P O N O T I F I C A C I O N'), array('action' => 'add')); ?> </li>
	</ul>
</div>
