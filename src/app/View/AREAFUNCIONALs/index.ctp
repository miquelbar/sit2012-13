<div class="aREAFUNCIONALs index">
	<h2><?php echo __('A R E A F U N C I O N A Ls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($aREAFUNCIONALs as $aREAFUNCIONAL): ?>
	<tr>
		<td><?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['id']); ?>&nbsp;</td>
		<td><?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aREAFUNCIONAL['AREAFUNCIONAL']['id']), null, __('Are you sure you want to delete # %s?', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('action' => 'add')); ?></li>
	</ul>
</div>
