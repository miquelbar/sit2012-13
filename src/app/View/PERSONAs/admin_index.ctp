<div class="pERSONAs index">
	<h2><?php echo __('P E R S O N As'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido1'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido2'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pERSONAs as $pERSONA): ?>
	<tr>
		<td><?php echo h($pERSONA['PERSONA']['id']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['apellido2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pERSONA['PERSONA']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pERSONA['PERSONA']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pERSONA['PERSONA']['id']), null, __('Are you sure you want to delete # %s?', $pERSONA['PERSONA']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New P E R S O N A'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('controller' => 'a_r_e_a_p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
