<div class="pROPUESTa view">
<h2><?php  echo __('P R O P U E S Tum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Creacion'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['fecha_creacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificacion'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['justificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Limite'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['fecha_limite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($pROPUESTum['PROPUESTum']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Solicitante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['Solicitante']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Solicitante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cartera'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROPUESTum['Cartera']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracion Cio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['ValoracionCio']['descripcion'], array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'view', $pROPUESTum['ValoracionCio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tecnico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['Tecnico']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Tecnico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patrocinador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Patrocinador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Pro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROPUESTum['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROPUESTum['TipoPro']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P R O P U E S Tum'), array('action' => 'edit', $pROPUESTum['PROPUESTum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete P R O P U E S Tum'), array('action' => 'delete', $pROPUESTum['PROPUESTum']['id']), null, __('Are you sure you want to delete # %s?', $pROPUESTum['PROPUESTum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O P U E S Ta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R O P U E S Tum'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related A R E A F U N C I O N A Ls'); ?></h3>
	<?php if (!empty($pROPUESTum['AREA'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pROPUESTum['AREA'] as $aREA): ?>
		<tr>
			<td><?php echo $aREA['id']; ?></td>
			<td><?php echo $aREA['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'view', $aREA['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'edit', $aREA['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'delete', $aREA['id']), null, __('Are you sure you want to delete # %s?', $aREA['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related O B J E T I V O T A C T I C Os'); ?></h3>
	<?php if (!empty($pROPUESTum['OBJETIVO'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Objetivo Estrategico Id'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pROPUESTum['OBJETIVO'] as $oBJETIVO): ?>
		<tr>
			<td><?php echo $oBJETIVO['id']; ?></td>
			<td><?php echo $oBJETIVO['nombre']; ?></td>
			<td><?php echo $oBJETIVO['descripcion']; ?></td>
			<td><?php echo $oBJETIVO['objetivo_estrategico_id']; ?></td>
			<td><?php echo $oBJETIVO['fecha_inicio']; ?></td>
			<td><?php echo $oBJETIVO['fecha_fin']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'view', $oBJETIVO['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'edit', $oBJETIVO['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'delete', $oBJETIVO['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVO['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
