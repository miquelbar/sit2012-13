<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/TIPONOTIFICACIONs/index">Tipo Notificaci&oacute;n</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;adir<span class="divider">/</span></li>
</ul>
<div class="tIPONOTIFICACIONs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('A&ntilde;adir Tipo Notificaci&oacute;n'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('TIPONOTIFICACION'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('mensaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
