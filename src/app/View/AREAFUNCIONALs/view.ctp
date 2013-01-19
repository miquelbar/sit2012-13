<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/AREAFUNCIONALs/index">&Aacute;reas Funcionales</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="aREAFUNCIONALs view">
	<legend>
		<div class="row-fluid">
			<div class="span3">
				
					<strong><?php echo __('Área Funcional'); ?></strong>
				
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<? if ($puedeEditar) { ?>
						<li><?php echo $this->Html->link(__('Editar Área Funcional'), array('action' => 'edit', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar Área Funcional'), array('action' => 'delete', $aREAFUNCIONAL['AREAFUNCIONAL']['id']), null, __('Are you sure you want to delete # %s?', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
						<? } ?>
						<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Añadir Área Funcional'), array('action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
			<tr>
				<td><strong><?php echo __('Id'); ?></strong></td>
				<td>
					<?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['id']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Nombre'); ?></strong></td>
				<td>
					<?php echo h($aREAFUNCIONAL['AREAFUNCIONAL']['nombre']); ?>
					&nbsp;
				</td>
			</tr>
		</table>

</div>
<div class="actions">
	<!--<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit A R E A F U N C I O N A L'), array('action' => 'edit', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete A R E A F U N C I O N A L'), array('action' => 'delete', $aREAFUNCIONAL['AREAFUNCIONAL']['id']), null, __('Are you sure you want to delete # %s?', $aREAFUNCIONAL['AREAFUNCIONAL']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A F U N C I O N A L'), array('action' => 'add')); ?> </li>
	</ul>-->
</div>
