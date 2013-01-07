<div class="mETRICAs view">
<h2><?php  echo __('M E T R I C A'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Propuesta'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_propuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Proyecto'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Servicio'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_servicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidades'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['unidades']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dominio'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['dominio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit M E T R I C A'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete M E T R I C A'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List V A L O R M E T R I C As'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New V A L O R'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related V A L O R M E T R I C As'); ?></h3>
	<?php if (!empty($mETRICA['VALOR'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Metrica Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Propuesta Id'); ?></th>
		<th><?php echo __('Servicio Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($mETRICA['VALOR'] as $vALOR): ?>
		<tr>
			<td><?php echo $vALOR['id']; ?></td>
			<td><?php echo $vALOR['metrica_id']; ?></td>
			<td><?php echo $vALOR['proyecto_id']; ?></td>
			<td><?php echo $vALOR['propuesta_id']; ?></td>
			<td><?php echo $vALOR['servicio_id']; ?></td>
			<td><?php echo $vALOR['fecha']; ?></td>
			<td><?php echo $vALOR['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'view', $vALOR['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'edit', $vALOR['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'delete', $vALOR['id']), null, __('Are you sure you want to delete # %s?', $vALOR['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New V A L O R'), array('controller' => 'v_a_l_o_r_m_e_t_r_i_c_as', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
