<div class="pROYECTOs index">
	<h2><?php echo __('P R O Y E C T Os'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cartera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('propuesta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_pro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patrocinador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_prevista'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_prevista'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_real'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_real'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('justificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pROYECTOs as $pROYECTO): ?>
	<tr>
		<td><?php echo h($pROYECTO['PROYECTO']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROYECTO['Cartera']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['Propuesta']['id'], array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'view', $pROYECTO['Propuesta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROYECTO['TipoPro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['EstadoProyecto']['nombre'], array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'view', $pROYECTO['EstadoProyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Patrocinador']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($pROYECTO['PROYECTO']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_inicio_prevista']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_fin_prevista']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_inicio_real']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_fin_real']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['justificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pROYECTO['PROYECTO']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pROYECTO['PROYECTO']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pROYECTO['PROYECTO']['id']), null, __('Are you sure you want to delete # %s?', $pROYECTO['PROYECTO']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O P U E S T As'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List E S T A D O P R O Y E C T Os'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List S E R V I C I Os'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
