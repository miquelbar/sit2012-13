<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/AREAFUNCIONALs/index">&Aacute;reas Funcionales</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="aREAFUNCIONALs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
				
					<strong><?php echo __('Editar &Aacute;rea Funcional'); ?></strong>
				
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('AREAFUNCIONAL.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AREAFUNCIONAL.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Ver &Aacute;reas Funcionales'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('AREAFUNCIONAL'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<!--<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AREAFUNCIONAL.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AREAFUNCIONAL.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
