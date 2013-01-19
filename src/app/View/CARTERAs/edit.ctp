<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/CARTERAs/index">Carteras</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="cARTERAs form">
		<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Editar Cartera'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('CARTERA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CARTERA.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('CARTERA'); ?>
	<fieldset>
		<?php
		echo $this->Form->input('id');
		?>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
			
			<tr>
				<td><?=$this->Form->input('fecha_creacion');?></td>
			</tr>
			<tr>
				<td><? echo $this->Form->input('fecha_inicio_periodo'); ?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_fin_periodo');?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_ultima_discusion');?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_obtencion_definitiva');?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_inicio_validez');?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_fin_validez');?></td>
			</tr>
			<tr>
				<td><?echo $this->Form->input('fecha_ultima_modificacion'); ?></td>
			</tr>
		</table>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Editar Cartera', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CARTERA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CARTERA.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
