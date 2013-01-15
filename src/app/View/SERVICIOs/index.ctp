<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Servicios<span class="divider">/</span></li>
</ul>
<div class="sERVICIOs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Servicios'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>

				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_final'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($sERVICIOs as $sERVICIO): ?>
	<tr>
		<td><?php echo h($sERVICIO['SERVICIO']['id']); ?>&nbsp;</td>
		<td><?php echo h($sERVICIO['SERVICIO']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($sERVICIO['SERVICIO']['fecha_final']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sERVICIO['Responsable']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $sERVICIO['Responsable']['id'])); ?>
		</td>
		<td><?php echo h($sERVICIO['SERVICIO']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($sERVICIO['SERVICIO']['id']);?>		
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
</div>
<div class="actions">
<!--	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
