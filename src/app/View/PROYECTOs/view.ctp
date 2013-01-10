<div class="pROYECTOs view">
<h2><?php  echo __('P R O Y E C T O'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cartera'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROYECTO['Cartera']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propuesta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['Propuesta']['id'], array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'view', $pROYECTO['Propuesta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Pro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROYECTO['TipoPro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['EstadoProyecto']['nombre'], array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'view', $pROYECTO['EstadoProyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patrocinador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Patrocinador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pROYECTO['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Prevista'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['fecha_inicio_prevista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Prevista'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['fecha_fin_prevista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Real'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['fecha_inicio_real']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Real'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['fecha_fin_real']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Justificacion'); ?></dt>
		<dd>
			<?php echo h($pROYECTO['PROYECTO']['justificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P R O Y E C T O'), array('action' => 'edit', $pROYECTO['PROYECTO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete P R O Y E C T O'), array('action' => 'delete', $pROYECTO['PROYECTO']['id']), null, __('Are you sure you want to delete # %s?', $pROYECTO['PROYECTO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related A R E A F U N C I O N A Ls'); ?></h3>
	<?php if (!empty($pROYECTO['AREA'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pROYECTO['AREA'] as $aREA): ?>
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
	<h3><?php echo __('Related O B J E T I V O E S T R A T E G I C Os'); ?></h3>
	<?php if (!empty($pROYECTO['OBJETIVO'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Principio Tic Id'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Fin'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pROYECTO['OBJETIVO'] as $oBJETIVO): ?>
		<tr>
			<td><?php echo $oBJETIVO['id']; ?></td>
			<td><?php echo $oBJETIVO['nombre']; ?></td>
			<td><?php echo $oBJETIVO['descripcion']; ?></td>
			<td><?php echo $oBJETIVO['principio_tic_id']; ?></td>
			<td><?php echo $oBJETIVO['fecha_inicio']; ?></td>
			<td><?php echo $oBJETIVO['fecha_fin']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'view', $oBJETIVO['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'edit', $oBJETIVO['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'delete', $oBJETIVO['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVO['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related S E R V I C I Os'); ?></h3>
	<?php if (!empty($pROYECTO['SERVICIO'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha Inicio'); ?></th>
		<th><?php echo __('Fecha Final'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pROYECTO['SERVICIO'] as $sERVICIO): ?>
		<tr>
			<td><?php echo $sERVICIO['id']; ?></td>
			<td><?php echo $sERVICIO['fecha_inicio']; ?></td>
			<td><?php echo $sERVICIO['fecha_final']; ?></td>
			<td><?php echo $sERVICIO['responsable_id']; ?></td>
			<td><?php echo $sERVICIO['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'view', $sERVICIO['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'edit', $sERVICIO['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'delete', $sERVICIO['id']), null, __('Are you sure you want to delete # %s?', $sERVICIO['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
