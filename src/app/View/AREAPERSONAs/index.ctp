<div class="aREAPERSONAs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('&Aacute;rea Persona'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('List Area Funcionals'), array('controller' => 'area_funcionals', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'area_funcionals', 'action' => 'add')); ?> </li>
					<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>
	<!--<h2><?php echo __('&Aacute;rea Persona'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('area_funcional_id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($aREAPERSONAs as $aREAPERSONA): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($aREAPERSONA['AREAFUNCIONAL']['nombre'], array('controller' => 'area_funcionals', 'action' => 'view', $aREAPERSONA['AREAFUNCIONAL']['id'])); ?>
		 </td>
		<td>
			<?php echo $this->Html->link($aREAPERSONA['PERSONA']['nombre'], array('controller' => 'personas', 'action' => 'view', $aREAPERSONA['PERSONA']['id'])); ?>
		</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($aREAPERSONA['AREAPERSONA']['id']);?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Area Funcionals'), array('controller' => 'area_funcionals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'area_funcionals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
