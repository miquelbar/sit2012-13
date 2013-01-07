<div class="mETRICAs index">
	<h2><?php echo __('M E T R I C As'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('para_propuesta'); ?></th>
			<th><?php echo $this->Paginator->sort('para_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('para_servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('unidades'); ?></th>
			<th><?php echo $this->Paginator->sort('dominio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($mETRICAs as $mETRICA): ?>
	<tr>
		<td><?php echo h($mETRICA['METRICA']['id']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_propuesta']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_servicio']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['unidades']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['dominio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mETRICA['METRICA']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List V A L O R M E T R I C As'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New V A L O R'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
