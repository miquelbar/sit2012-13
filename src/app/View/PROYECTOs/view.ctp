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
						<li><?php echo $this->Html->link(__('Ver Proyectos'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Propuestas'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'add')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('List E S T A D O P R O Y E C T Os'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('New Estado Proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Objetivos Estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Ver Objetivos Tácticos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Servicios'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>-->
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
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span8">
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
<div class="metricas">
	<?=$this->Metrica->buildForShow($metricas, array(
		'class' => 'table table-striped table-bordered table-hover span7',
		'unidades' => true,
		'titulo' => 'Métricas'
	))?>
</div>
<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<thead>
		<tr>
		<th>Evolución de métricas</th>
		</tr>
		<?=$load_gfx?>
	</thead>
	<body>
	<?
	
	foreach ($gfx as $key => $value) {
		
		?>
		<tr>
			<td>
				<?=$value['container']?>
				<script type="text/javascript">
					<?=$value['script']?>
				</script>
			</td>
		</tr>
		<?
	
	}
	
	?>
	</body>
</table>
<div class="related">
	<?php if (!empty($pROYECTO['AREA'])): ?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<thead>
			<tr><th>Áreas funcionales del servicio</th></tr>
			<tr>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Id'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$i = 0;
			foreach ($pROYECTO['AREA'] as $aREA): ?>
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
	<?php if (!empty($pROYECTO['OBJETIVO'])): ?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
	<thead>
		<tr>
			<th>Objetivos tácticos del servicio</th>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Descripcion'); ?></th>
			<th><?php echo __('Id'); ?></th>
		</tr>
	</thead>
	<?php
		$i = 0;
		foreach ($pROYECTO['OBJETIVO'] as $oBJETIVO): ?>
		<tr>
			<td><?php echo $oBJETIVO['nombre']; ?></td>
			<td><?php echo $oBJETIVO['descripcion']; ?></td>
			<td><?php echo $oBJETIVO['id']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($pROYECTO['SERVICIO'])): ?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">	
	<thead>
		<tr>
			<th>Servicios relacionados</th>
		</tr>
		<tr>
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Id'); ?></th>
		</tr>
	</thead>
	<?php
		$i = 0;
		foreach ($pROYECTO['SERVICIO'] as $sERVICIO): ?>
		<tr>
			<td><?php echo $sERVICIO['nombre']; ?></td>
			<td><?php echo $sERVICIO['id']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
