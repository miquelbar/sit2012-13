<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/TIPONOTIFICACIONs/index">Tipo Notificaci&oacute;n</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="tIPONOTIFICACIONs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Editar Tipo Notificaci&oacute;n'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TIPONOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TIPONOTIFICACION.id'))); ?></li>
						<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('TIPONOTIFICACION'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mensaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TIPONOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TIPONOTIFICACION.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
