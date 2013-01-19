<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/OBJETIVOTACTICOs/index">Objetivos T&aacute;cticos</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="oBJETIVOTACTICOs view">
<fieldset>
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Ver objetivo t&aacute;ctico'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Editar objetivo táctico.'), array('action' => 'edit', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar objetivo táctico.'), array('action' => 'delete', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
						<? } ?>
						<li><?php echo $this->Html->link(__('Listar objetivos tácticos.'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nuevo objetivo táctico.'), array('action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Listar objetivos estratégicos.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
			<tr>
				<td><strong><?php echo __('Id'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['id']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Nombre'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['nombre']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Descripcion'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['descripcion']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Objetivo Estrategico'); ?></strong></td>
				<td>
					<?php echo $this->Html->link($oBJETIVOTACTICO['ObjetivoEstrategico']['nombre'], array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'view', $oBJETIVOTACTICO['ObjetivoEstrategico']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Fecha Inicio'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_inicio']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Fecha Fin'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_fin']); ?>
					&nbsp;
				</td>
			</tr>
		</table>
</div>
<div class="actions">
	<!--<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar objetivo táctico.'), array('action' => 'edit', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar objetivo táctico.'), array('action' => 'delete', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar objetivos tácticos.'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo táctico.'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
