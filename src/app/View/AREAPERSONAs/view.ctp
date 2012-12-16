<div class="aREAPERSONAs view">
<h2><?php  echo __('A R E A P E R S O N A'); ?></h2>
	<dl>
		<dt><?php echo __('Area Funcional'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aREAPERSONA['AreaFuncional']['id'], array('controller' => 'area_funcionals', 'action' => 'view', $aREAPERSONA['AreaFuncional']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aREAPERSONA['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $aREAPERSONA['Persona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit A R E A P E R S O N A'), array('action' => 'edit', $aREAPERSONA['AREAPERSONA']['area_funcional_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete A R E A P E R S O N A'), array('action' => 'delete', $aREAPERSONA['AREAPERSONA']['area_funcional_id']), null, __('Are you sure you want to delete # %s?', $aREAPERSONA['AREAPERSONA']['area_funcional_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Area Funcionals'), array('controller' => 'area_funcionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'area_funcionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
