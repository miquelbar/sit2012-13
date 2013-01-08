<div class="sERVICIOs view">
<h2><?php  echo __('S E R V I C I O'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sERVICIO['SERVICIO']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($sERVICIO['SERVICIO']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final'); ?></dt>
		<dd>
			<?php echo h($sERVICIO['SERVICIO']['fecha_final']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sERVICIO['Responsable']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $sERVICIO['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($sERVICIO['SERVICIO']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit S E R V I C I O'), array('action' => 'edit', $sERVICIO['SERVICIO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete S E R V I C I O'), array('action' => 'delete', $sERVICIO['SERVICIO']['id']), null, __('Are you sure you want to delete # %s?', $sERVICIO['SERVICIO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List S E R V I C I Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related A R E A F U N C I O N A Ls'); ?></h3>
	<?php if (!empty($sERVICIO['AREAFUNCIONAL'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sERVICIO['AREAFUNCIONAL'] as $aREAFUNCIONAL): ?>
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
<div class="related">
	<h3><?php echo __('Related P R O Y E C T Os'); ?></h3>
	<?php if (!empty($sERVICIO['PROYECTO'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cartera Id'); ?></th>
		<th><?php echo __('Propuesta Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Fecha Inicio Prevista'); ?></th>
		<th><?php echo __('Fecha Inicio Real'); ?></th>
		<th><?php echo __('Fecha Fin Prevista'); ?></th>
		<th><?php echo __('Fecha Fin Real'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Justificacion'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Patrocinador Id'); ?></th>
		<th><?php echo __('Responsable Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sERVICIO['PROYECTO'] as $pROYECTO): ?>
		<tr>
			<td><?php echo $pROYECTO['id']; ?></td>
			<td><?php echo $pROYECTO['cartera_id']; ?></td>
			<td><?php echo $pROYECTO['propuesta_id']; ?></td>
			<td><?php echo $pROYECTO['codigo']; ?></td>
			<td><?php echo $pROYECTO['nombre']; ?></td>
			<td><?php echo $pROYECTO['tipo']; ?></td>
			<td><?php echo $pROYECTO['fecha_inicio_prevista']; ?></td>
			<td><?php echo $pROYECTO['fecha_inicio_real']; ?></td>
			<td><?php echo $pROYECTO['fecha_fin_prevista']; ?></td>
			<td><?php echo $pROYECTO['fecha_fin_real']; ?></td>
			<td><?php echo $pROYECTO['descripcion']; ?></td>
			<td><?php echo $pROYECTO['justificacion']; ?></td>
			<td><?php echo $pROYECTO['estado']; ?></td>
			<td><?php echo $pROYECTO['patrocinador_id']; ?></td>
			<td><?php echo $pROYECTO['responsable_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'view', $pROYECTO['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'edit', $pROYECTO['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'delete', $pROYECTO['id']), null, __('Are you sure you want to delete # %s?', $pROYECTO['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
