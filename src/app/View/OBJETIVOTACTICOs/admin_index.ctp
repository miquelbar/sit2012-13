<div class="oBJETIVOTACTICOs index">
	<h2><?php echo __('O B J E T I V O T A C T I C Os'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_estrategico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($oBJETIVOTACTICOs as $oBJETIVOTACTICO): ?>
	<tr>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['id']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oBJETIVOTACTICO['ObjetivoEstrategico']['nombre'], array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'view', $oBJETIVOTACTICO['ObjetivoEstrategico']['id'])); ?>
		</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New O B J E T I V O T A C T I C O'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objetivo Estrategico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
