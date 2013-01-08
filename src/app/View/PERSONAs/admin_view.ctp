<div class="pERSONAs view">
<h2><?php  echo __('P E R S O N A'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['apellido2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P E R S O N A'), array('action' => 'edit', $pERSONA['PERSONA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete P E R S O N A'), array('action' => 'delete', $pERSONA['PERSONA']['id']), null, __('Are you sure you want to delete # %s?', $pERSONA['PERSONA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P E R S O N A'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related A R E A F U N C I O N A Ls'); ?></h3>
	<?php if (!empty($pERSONA['AREAFUNCIONAL'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pERSONA['AREAFUNCIONAL'] as $aREAFUNCIONAL): ?>
		<tr>
			<td><?php echo $aREAFUNCIONAL['id']; ?></td>
			<td><?php echo $aREAFUNCIONAL['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'view', $aREAFUNCIONAL['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'edit', $aREAFUNCIONAL['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'delete', $aREAFUNCIONAL['id']), null, __('Are you sure you want to delete # %s?', $aREAFUNCIONAL['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
