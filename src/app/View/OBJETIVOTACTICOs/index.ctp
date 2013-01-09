<div class="oBJETIVOTACTICOs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Objetivos Tacticos'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Nuevo objetivo táctico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>

	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo_estrategico_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($oBJETIVOTACTICOs as $oBJETIVOTACTICO): ?>
	<tr>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['id']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oBJETIVOTACTICO['ObjetivoEstrategico']['nombre'], array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'view', $oBJETIVOTACTICO['ObjetivoEstrategico']['id'])); ?>
		</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($oBJETIVOTACTICO['OBJETIVOTACTICO']['id']);?>		
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
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo objetivo táctico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
