<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/OBJETIVOESTRATEGICOs/index">Objetivos Estrat&eacute;gicos</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="oBJETIVOESTRATEGICOs view">
	<legend>
		<div class="row-fluid">
			<div class="span4">
					<strong><?php echo __('Ver objetivo estratégico'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Editar Objetivo Estratégico'), array('action' => 'edit', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar Objetivo Estratégico'), array('action' => 'delete', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
						<? } ?>
						<li><?php echo $this->Html->link(__('Ver Objetivos Estratégicos'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('A&ntilde;adir Objetivo Estrat&eacute;gico'), array('action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Principios TIC'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('A&ntilde;adir Principio TIC'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
			<tr>
				<td><strong><?php echo __('Id'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Nombre'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['nombre']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Descripcion'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['descripcion']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Principio Tic'); ?></strong></td>
				<td>
					<?php echo $this->Html->link($oBJETIVOESTRATEGICO['PrincipioTic']['nombre'], array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'view', $oBJETIVOESTRATEGICO['PrincipioTic']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Fecha Inicio'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_inicio']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Fecha Fin'); ?></strong></td>
				<td>
					<?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_fin']); ?>
					&nbsp;
				</td>
			</tr>
		</table>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit O B J E T I V O E S T R A T E G I C O'), array('action' => 'edit', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete O B J E T I V O E S T R A T E G I C O'), array('action' => 'delete', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O E S T R A T E G I C O'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Principio Tic'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
