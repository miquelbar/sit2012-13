<div class="sERVICIOs index">
	<h2><?php echo __('S E R V I C I Os'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_final'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sERVICIOs as $sERVICIO): ?>
	<tr>
		<td><?php echo h($sERVICIO['SERVICIO']['id']); ?>&nbsp;</td>
		<td><?php echo h($sERVICIO['SERVICIO']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($sERVICIO['SERVICIO']['fecha_final']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sERVICIO['Responsable']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $sERVICIO['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($sERVICIO['SERVICIO']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sERVICIO['SERVICIO']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sERVICIO['SERVICIO']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sERVICIO['SERVICIO']['id']), null, __('Are you sure you want to delete # %s?', $sERVICIO['SERVICIO']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
