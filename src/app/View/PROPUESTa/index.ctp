<div class="pROPUESTa index">
	<h2><?php echo __('P R O P U E S Ta'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<th><?php echo $this->Paginator->sort('justificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_limite'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cartera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valoracion_cio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tecnico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patrocinador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_pro_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pROPUESTa as $pROPUESTum): ?>
	<tr>
		<td><?php echo h($pROPUESTum['PROPUESTum']['id']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_creacion']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['justificacion']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_limite']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['estado']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Solicitante']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Solicitante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROPUESTum['Cartera']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['ValoracionCio']['descripcion'], array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'view', $pROPUESTum['ValoracionCio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Tecnico']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Tecnico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Patrocinador']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Responsable']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROPUESTum['TipoPro']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pROPUESTum['PROPUESTum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pROPUESTum['PROPUESTum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pROPUESTum['PROPUESTum']['id']), null, __('Are you sure you want to delete # %s?', $pROPUESTum['PROPUESTum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New P R O P U E S Tum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitante'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List V A L O R A C I O N C I Os'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valoracion Cio'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O T A C T I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
