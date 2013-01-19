<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROYECTOs/index">Proyectos</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="pROYECTOs view">
<fieldset>
		<legend>
			<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Ver Proyecto'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('List P R O P U E S T As'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
						
						<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
						
						
						<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
						
						<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						
						<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
						
						<li><?php echo $this->Html->link(__('List S E R V I C I Os'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>

			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<tr>
			<td><strong><?php echo __('Id'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['id']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			
			<td><?php echo __('Cartera'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROYECTO['Cartera']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		<tr>	
			<td><?php echo __('Propuesta'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['Propuesta']['id'], array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'view', $pROYECTO['Propuesta']['id'])); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>
			<td><?php echo __('Tipo Pro'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROYECTO['TipoPro']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Estado Proyecto'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['EstadoProyecto']['nombre'], array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'view', $pROYECTO['EstadoProyecto']['id'])); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>	
			<td><?php echo __('Patrocinador'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Patrocinador']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Responsable'); ?></td>
			<td>
				<?php echo $this->Html->link($pROYECTO['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROYECTO['Responsable']['id'])); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>	
			<td><?php echo __('Codigo'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['codigo']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><?php echo __('Nombre'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['nombre']); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>
			<td><?php echo __('Fecha Inicio Prevista'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['fecha_inicio_prevista']); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>	
			<td><?php echo __('Fecha Fin Prevista'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['fecha_fin_prevista']); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>	
			<td><?php echo __('Fecha Inicio Real'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['fecha_inicio_real']); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>	
			<td><?php echo __('Fecha Fin Real'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['fecha_fin_real']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<tr>	
			<td><?php echo __('Descripcion'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['descripcion']); ?>
				&nbsp;
			</td>
		</tr>	
		<tr>
			<td><?php echo __('Justificacion'); ?></td>
			<td>
				<?php echo h($pROYECTO['PROYECTO']['justificacion']); ?>
				&nbsp;
			</td>
		</tr>
		
		</tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P R O Y E C T O'), array('action' => 'edit', $pROYECTO['PROYECTO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete P R O Y E C T O'), array('action' => 'delete', $pROYECTO['PROYECTO']['id']), null, __('Are you sure you want to delete # %s?', $pROYECTO['PROYECTO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R O Y E C T O'), array('action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O P U E S T As'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List E S T A D O P R O Y E C T Os'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'atd')); ?> </li>
		<li><?php echo $this->Html->link(__('List S E R V I C I Os'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'atd')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related A R E A F U N C I O N A Ls'); ?></h3>
	<?php if (!empty($pROYECTO['AREA'])): ?>
	<table cellpatding = "0" cellspacing = "0">
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
			<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'atd')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related O B J E T I V O E S T R A T E G I C Os'); ?></h3>
	<?php if (!empty($pROYECTO['OBJETIVO'])): ?>
	<table cellpatding = "0" cellspacing = "0">
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
			<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'atd')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related S E R V I C I Os'); ?></h3>
	<?php if (!empty($pROYECTO['SERVICIO'])): ?>
	<table cellpatding = "0" cellspacing = "0">
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
<!--		<ul>
			<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'atd')); ?> </li>
</ul>-->
	</div>
</div>
