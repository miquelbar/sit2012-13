<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/TIPONOTIFICACIONs/index">Tipo Notificaci&oacute;n</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="tIPONOTIFICACIONs view">
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
			  			<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Edit T I P O N O T I F I C A C I O N'), array('action' => 'edit', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Delete T I P O N O T I F I C A C I O N'), array('action' => 'delete', $tIPONOTIFICACION['TIPONOTIFICACION']['id']), null, __('Are you sure you want to delete # %s?', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
						<? } ?>
						<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New T I P O N O T I F I C A C I O N'), array('action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensaje'); ?></dt>
		<dd>
			<?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['mensaje']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit T I P O N O T I F I C A C I O N'), array('action' => 'edit', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete T I P O N O T I F I C A C I O N'), array('action' => 'delete', $tIPONOTIFICACION['TIPONOTIFICACION']['id']), null, __('Are you sure you want to delete # %s?', $tIPONOTIFICACION['TIPONOTIFICACION']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New T I P O N O T I F I C A C I O N'), array('action' => 'add')); ?> </li>
	</ul>
</div>
