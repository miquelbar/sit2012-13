<ul class="breadcrumb">
  <li><a href="/PRINCIPIOTICs/index">Principio TIC</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="pRINCIPIOTICs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Editar Principio TIC'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PRINCIPIOTIC.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PRINCIPIOTIC.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Listar principios TIC'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('PRINCIPIOTIC'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PRINCIPIOTIC.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PRINCIPIOTIC.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar principios TIC'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
