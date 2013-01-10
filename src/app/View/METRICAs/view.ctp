<ul class="breadcrumb">
  <li><a href="/METRICAs/index">M&eacute;tricas</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="mETRICAs view">
	<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Ver m&eacute;trica'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Edit M E T R I C A'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete M E T R I C A'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'add')); ?> </li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Propuesta'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_propuesta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Proyecto'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Para Servicio'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['para_servicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidades'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['unidades']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dominio'); ?></dt>
		<dd>
			<?php echo h($mETRICA['METRICA']['dominio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit M E T R I C A'), array('action' => 'edit', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete M E T R I C A'), array('action' => 'delete', $mETRICA['METRICA']['id']), null, __('Are you sure you want to delete # %s?', $mETRICA['METRICA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List M E T R I C As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'add')); ?> </li>
	</ul>-->
</div>
