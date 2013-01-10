<ul class="breadcrumb">
  <li><a href="/SERVICIOs/index">Servicios</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="sERVICIOs view">
	<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Ver Servicio'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar servicio'), array('action' => 'edit', $sERVICIO['SERVICIO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar servicio'), array('action' => 'delete', $sERVICIO['SERVICIO']['id']), null, __('Are you sure you want to delete # %s?', $sERVICIO['SERVICIO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar servicios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Area Funcional'); ?></h3>
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
<!--		<ul>
			<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
</ul>-->
	</div>
</div>
