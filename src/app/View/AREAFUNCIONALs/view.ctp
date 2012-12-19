<div class="aREAFUNCIONALs view">
<h2><?php  echo __('A R E A F U N C I O N A L'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit A R E A F U N C I O N A L'), array('action' => 'edit', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete A R E A F U N C I O N A L'), array('action' => 'delete', $aREAFUNCIONAL['AREAFUNCIONAL']['id']), null, __('Are you sure you want to delete # %s?', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('action' => 'add')); ?> </li>
	</ul>
</div>
