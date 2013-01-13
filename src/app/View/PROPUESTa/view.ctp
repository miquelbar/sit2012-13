<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROPUESTa/index">Propuesta</a> <span class="divider">/</span></li>
  <li class="active">Ver propuesta<span class="divider">/</span></li>
</ul>
<div class="pROPUESTa view">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Propuesta'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Realizar propuesta'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Editar propuesta'), array('action' => 'edit', $pROPUESTum['PROPUESTum']['id'])); ?> </li>
					<li><?php echo $this->Form->postLink(__('Eliminar propuesta'), array('action' => 'delete', $pROPUESTum['PROPUESTum']['id']), null, __('¿Estás seguro de querer eliminar esta propuesta?')); ?> </li>
					<li><?php echo $this->Html->link(__('Ver carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Ver tipos de propuesta'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo tipo de propuesta'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva área funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('Listar objetivos tácticos'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo objetivo'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
		<thead>
			<tr>
				<th>ID</th>
				<th>Fecha</th>
				<th>Estado</th>
				<th>Tipo de propuesta</th>
				<th>Cartera</th>
				<th>Fecha límite</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo h($pROPUESTum['PROPUESTum']['id']); ?>&nbsp;</td>
				<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_creacion']); ?>&nbsp;</td>
				<td><?php echo h($estado); ?>&nbsp;</td>
				<td><?php echo $this->Html->link($pROPUESTum['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROPUESTum['TipoPro']['id'])); ?>&nbsp;</td>
				<td><?php echo $this->Html->link($pROPUESTum['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROPUESTum['Cartera']['id'])); ?></td>
				<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_limite']); ?></td>
			</tr>
		</tbody>
	</table>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<thead>
			<tr><th colspan="2">Participantes</th></tr>
			<tr>
				<th>Responsabilidad</th>
				<th>Participante</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Solicitante</td>
				<td><?php echo $this->Html->link($pROPUESTum['Solicitante']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Solicitante']['id'])); ?></td>
			</tr>
			<tr>
				<td>Responsable</td>
				<td><?php echo $this->Html->link($pROPUESTum['Responsable']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Responsable']['id'])); ?></td>
			</tr>
			<tr>
				<td>Técnico</td>
				<td><?php echo $this->Html->link($pROPUESTum['Tecnico']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Tecnico']['id'])); ?></td>
			</tr>
			<tr>
				<td>Patrocinador</td>
				<td><?php echo $this->Html->link($pROPUESTum['Patrocinador']['correo'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Patrocinador']['id'])); ?></td>
			</tr>
		</tbody>
	</table>
	<div class="related">
		<?php if (!empty($pROPUESTum['AREA'])): ?>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
			<thead>
				<tr><th>Áreas funcionales de la propuesta</th></tr>
				<tr>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Id'); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php
				$i = 0;
				foreach ($pROPUESTum['AREA'] as $aREA): ?>
				<tr>
					<td><?php echo $aREA['nombre']; ?></td>
					<td><?php echo $aREA['id']; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>
	</div>
	
	<div class="related">
		<?php if (!empty($pROPUESTum['OBJETIVO'])): ?>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
		<thead>
			<tr>
				<th>Objetivos tácticos</th>
			</tr>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Descripcion'); ?></th>
				<th><?php echo __('Fecha Inicio'); ?></th>
				<th><?php echo __('Fecha Fin'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$i = 0;
			foreach ($pROPUESTum['OBJETIVO'] as $oBJETIVO): ?>
			<tr>
				<td><?php echo $oBJETIVO['id']; ?></td>
				<td><?php echo $oBJETIVO['nombre']; ?></td>
				<td><?php echo $oBJETIVO['descripcion']; ?></td>
				<td><?php echo $oBJETIVO['fecha_inicio']; ?></td>
				<td><?php echo $oBJETIVO['fecha_fin']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
		</tbody>
	<?php endif; ?>
	</div>
	
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
		<thead>
			<tr>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo h($pROPUESTum['PROPUESTum']['descripcion']); ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Resumen</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo h($pROPUESTum['PROPUESTum']['resumen']); ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Justificación</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo h($pROPUESTum['PROPUESTum']['justificacion']); ?></td>
			</tr>
		</tbody>
	</table>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
		<thead>
			<tr>
				<th>Valoración del CIO</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $this->Html->link($pROPUESTum['ValoracionCio']['descripcion'], array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'view', $pROPUESTum['ValoracionCio']['id'])); ?></td>
			</tr>
		</tbody>
	</table>
</div>