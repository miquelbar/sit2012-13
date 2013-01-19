<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/METRICAs/index">M&eacute;tricas</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="mETRICAs view">
	<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Ver Métrica'); ?></strong>
			</div>
			<? 
			
			if ($puedeEditar){
			
			?>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Editar Métricas'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar Métrica'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?> </li>
						<? } ?>
						<li><?php echo $this->Html->link(__('Ver Métricas'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('A&ntilde;adir M&eacute;tricas'), array('action' => 'atd')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
			<?
			
			}
			
			?>
		</div>
		</legend>
	<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
		<tr>
			<td><strong><?php echo __('Id'); ?></strong></td>
			<td>
				<?php echo h($mETRICA['METRICA']['id']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Titulo'); ?></strong></td>
			<td>
				<?php echo h($mETRICA['METRICA']['titulo']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Descripcion'); ?></strong></td>
			<td>
				<?php echo h($mETRICA['METRICA']['descripcion']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Métrica para'); ?></strong></td>
			<td>
				<?php echo $mETRICA['METRICA']['para_propuesta'] == 1 ? 'propuesta,' :'' ?>
				<?php echo $mETRICA['METRICA']['para_proyecto'] == 1 ? 'proyecto,' :'' ?>
				<?php echo $mETRICA['METRICA']['para_servicio'] == 1 ? 'servicio' :''?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Unidades'); ?></strong></td>
			<td>
				<?php echo h($mETRICA['METRICA']['unidades']); ?>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Dominio'); ?></strong></td>
			<td>
				<?php echo h($mETRICA['METRICA']['dominio']); ?>
				&nbsp;
			</td>
		</tr>
	</table>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit M E T R I C A'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete M E T R I C A'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'atd')); ?> </li>
	</ul>-->
</div>
