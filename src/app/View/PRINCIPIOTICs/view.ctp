<ul class="breadcrumb">
  <li><a href="/PRINCIPIOTICs/index">Principio TIC</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="pRINCIPIOTICs view">
<fieldset>
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Ver Principio TIC'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Edit P R I N C I P I O T I C'), array('action' => 'edit', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete P R I N C I P I O T I C'), array('action' => 'delete', $pRINCIPIOTIC['PRINCIPIOTIC']['id']), null, __('Are you sure you want to delete # %s?', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New P R I N C I P I O T I C'), array('action' => 'add')); ?> </li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_fin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit P R I N C I P I O T I C'), array('action' => 'edit', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete P R I N C I P I O T I C'), array('action' => 'delete', $pRINCIPIOTIC['PRINCIPIOTIC']['id']), null, __('Are you sure you want to delete # %s?', $pRINCIPIOTIC['PRINCIPIOTIC']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P R I N C I P I O T I C'), array('action' => 'add')); ?> </li>
	</ul>-->
</div>
