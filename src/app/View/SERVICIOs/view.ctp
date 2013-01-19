<ul class="breadcrumb">
  <li><a href="/SERVICIOs/index">Servicios</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="sERVICIOs view">
	<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo 'Ver Servicio '.$sERVICIO['SERVICIO']['nombre'] ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Editar servicio'), array('action' => 'edit', $sERVICIO['SERVICIO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar servicio'), array('action' => 'delete', $sERVICIO['SERVICIO']['id']), null, __('Are you sure you want to delete # %s?', $sERVICIO['SERVICIO']['id'])); ?> </li>
						<? } ?>
		<li><?php echo $this->Html->link(__('Ver Servicios'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Ver Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Ver areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Ver proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
	</legend>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<tr>
			<td><strong><?php echo __('Id'); ?></strong></td>
			<td>
				<?php echo h($sERVICIO['SERVICIO']['id']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Nombre'); ?></strong></td>
			<td>
				<?php echo h($sERVICIO['SERVICIO']['nombre']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Responsable'); ?></strong></td>
			<td>
				<?php echo $this->Html->link($sERVICIO['Responsable']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $sERVICIO['Responsable']['id'])); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Inicio'); ?></strong></td>
			<td>
				<?php echo h($sERVICIO['SERVICIO']['fecha_inicio']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Fecha Final'); ?></strong></td>
			<td>
				<?php echo h($sERVICIO['SERVICIO']['fecha_final']); ?>
				&nbsp;
			</td>
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
	<?php if (!empty($sERVICIO['AREAFUNCIONAL'])): ?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
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
			foreach ($sERVICIO['AREAFUNCIONAL'] as $aREA): ?>
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
	<?php if (!empty($sERVICIO['PROYECTO'])): ?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<thead>
		<tr>
			<th>Proyectos relacionados con el servicio.</th>
		</tr>
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
	</thead>
	<tbody>
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
	</tbody>
	</table>
<?php endif; ?>

</div>