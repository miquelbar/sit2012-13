<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Proyectos<span class="divider">/</span></li>
</ul>
<div class="pROYECTOs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Proyectos'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar propuestas'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar tipos de proyecto'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo tipo de proyecto'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar estado de proyectos'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo estado de proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar área funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva área funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar servicios'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo servicio'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('cartera_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_pro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patrocinador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_prevista'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_prevista'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pROYECTOs as $pROYECTO): ?>
	<tr>
		<td><?php echo h($pROYECTO['PROYECTO']['id']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pROYECTO['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROYECTO['Cartera']['id'])); ?>
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
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_inicio_prevista']); ?>&nbsp;</td>
		<td><?php echo h($pROYECTO['PROYECTO']['fecha_fin_prevista']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($pROYECTO['PROYECTO']['id'], $puedeEditar);?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando por {:start} y acabando en {:end}')
	));
	?>	</p>

	<div class="paginator">
	<ul>
	<?php
		if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()){
			echo $this->Paginator->prev('<<<', array('class'=>'btn'), null, array('class' => 'btn prev disabled'));
			echo $this->Paginator->numbers(array('separator'=>'','class'=>"btn", 'href=#', 'tag'=>'li'));
			echo $this->Paginator->next('>>>', array('class'=>'btn'), null, array('class' => 'btn next disabled'));
		}
	?>
	</ul>
	</div>
</div>
<?=$load_gfx?>
<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<th>
		<strong> Estado de las proyectos </strong>
	</th>
	<tr>
		<td>
			<?=$container_gfx_estado?>
			<script type="text/javascript">
				<?=$script_gfx_estado?>
			</script>
		</td>
	</tr>
<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<th>
		<strong> Proyectos por área </strong>
	</th>
	<tr>
		<td>
			<?=$container_gfx_area?>
			<script type="text/javascript">
				<?=$script_gfx_area?>
			</script>
		</td>
	</tr>
</table>
<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<th>
		<strong> Proyectos por objetivos </strong>
	</th>
	<tr>
		<td>
			<?=$container_gfx_objetivos?>
			<script type="text/javascript">
				<?=$script_gfx_objetivos?>
			</script>
		</td>
	</tr>
</table>
