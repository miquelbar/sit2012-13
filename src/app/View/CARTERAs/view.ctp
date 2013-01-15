<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/CARTERAs/index">Cartera</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="cARTERAs view">
<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Ver cartera'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Editar Cartera'), array('action' => 'edit', $cARTERA['CARTERA']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar Cartera'), array('action' => 'delete', $cARTERA['CARTERA']['id']), null, __('Are you sure you want to delete # %s?', $cARTERA['CARTERA']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir Cartera'), array('action' => 'add')); ?> </li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Creacion'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_creacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Periodo'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_inicio_periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Periodo'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_fin_periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ultima Discusion'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_ultima_discusion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Obtencion Definitiva'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_obtencion_definitiva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Validez'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_inicio_validez']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Validez'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_fin_validez']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ultima Modificacion'); ?></dt>
		<dd>
			<?php echo h($cARTERA['CARTERA']['fecha_ultima_modificacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit C A R T E R A'), array('action' => 'edit', $cARTERA['CARTERA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete C A R T E R A'), array('action' => 'delete', $cARTERA['CARTERA']['id']), null, __('Are you sure you want to delete # %s?', $cARTERA['CARTERA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New C A R T E R A'), array('action' => 'add')); ?> </li>
	</ul>-->
</div>
