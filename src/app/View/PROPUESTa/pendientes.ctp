<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROPUESTa/index">Propuesta</a> <span class="divider">/</span></li>
  <li class="active">Pendientes de valoración técnica<span class="divider">/</span></li>
</ul>
<div class="pROPUESTa index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Propuestas pendientes de valoración'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Realizar propuesta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('A&ntilde; Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver tipos de propuesta'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('A&ntilde; tipo de propuesta'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('A&ntilde; área funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver objetivos tácticos'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('A&ntilde; objetivo'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>
<? 

if (count($pROPUESTa) > 0) {
	
	?>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span12">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('descripcion'); ?></th>-->
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('justificacion'); ?></th>-->
			<!--<th><?php echo $this->Paginator->sort('fecha_limite'); ?></th>-->
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('solicitante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cartera_id'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('valoracion_cio_id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('tecnico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('patrocinador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_pro_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php
	foreach ($pROPUESTa as $pROPUESTum): ?>
	<tr class="<?=$colores[$pROPUESTum['PROPUESTum']['estado']]?>">
		<td><?php echo h($pROPUESTum['PROPUESTum']['id']); ?>&nbsp;</td>
		<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_creacion']); ?>&nbsp;</td>
		<!--<td><?php echo h($pROPUESTum['PROPUESTum']['descripcion']); ?>&nbsp;</td>-->
		<td><?php echo h($pROPUESTum['PROPUESTum']['resumen']); ?>&nbsp;</td>
		<!--<td><?php echo h($pROPUESTum['PROPUESTum']['justificacion']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($pROPUESTum['PROPUESTum']['fecha_limite']); ?>&nbsp;</td>-->
		<td><?php echo h($estados[$pROPUESTum['PROPUESTum']['estado']]); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Solicitante']['nombre'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Solicitante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Cartera']['fecha_inicio_periodo'], array('controller' => 'c_a_r_t_e_r_as', 'action' => 'view', $pROPUESTum['Cartera']['id'])); ?>
		</td>
		<!--<td>
			<?php echo $this->Html->link($pROPUESTum['ValoracionCio']['descripcion'], array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'view', $pROPUESTum['ValoracionCio']['id'])); ?>
		</td>-->
		<td>
			<?php echo $this->Html->link($pROPUESTum['Tecnico']['nombre'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Tecnico']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Patrocinador']['nombre'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Patrocinador']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['Responsable']['nombre'], array('controller' => 'u_s_u_a_r_i_os', 'action' => 'view', $pROPUESTum['Responsable']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pROPUESTum['TipoPro']['nombre'], array('controller' => 't_i_p_o_p_r_os', 'action' => 'view', $pROPUESTum['TipoPro']['id'])); ?>
		</td>
		<td class="actions">
			<a href="/PROPUESTa/asignartec/<?=$pROPUESTum['PROPUESTum']['id']?>" class="btn btn-inverse">Valorar</a>		
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

	<div class="paging">
	<?php
		if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()){
			echo $this->Paginator->prev('< ' . __('anterior'), array('class'=>'btn'), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		}
	?>
	</div>
	<?
	
} else {
	
	?>
    <div class="alert alert-info">
    	<h4>¡No hay propuestas pendientes!</h4>
    	No hay propuestas pendientes de valoración. Vuelva en otro momento para revisar si hay propuestas o espere a que le aparezca una notificación.
    </div>
	<?
}

?>
</div>

