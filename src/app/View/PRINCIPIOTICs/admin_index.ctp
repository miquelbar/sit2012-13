<div class="pRINCIPIOTICs index">
	<h2><?php echo __('P R I N C I P I O T I Cs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pRINCIPIOTICs as $pRINCIPIOTIC): ?>
	<tr>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['id']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pRINCIPIOTIC['PRINCIPIOTIC']['id']), null, __('Are you sure you want to delete # %s?', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New P R I N C I P I O T I C'), array('action' => 'add')); ?></li>
	</ul>
</div>
