<ul class="breadcrumb">
  <li><a href="/AREAFUNCIONALs/index">&Aacute;rea Funcional</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;dir<span class="divider">/</span></li>
</ul>
<div class="aREAFUNCIONALs form">
<?php echo $this->Form->create('AREAFUNCIONAL'); ?>
	<fieldset>
		<legend>
		<div class="row-fluid">
			<div class="span3">
				
					<strong><?php echo __('A&ntilde;adir &aacute;rea funcional'); ?></strong>
				
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
			  			<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<!--<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
