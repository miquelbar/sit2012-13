<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Tipo Notificaci&oacute;n<span class="divider">/</span></li>
</ul>
<div class="tIPONOTIFICACIONs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Tipo Notificaci&oacute;n'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('New T I P O N O T I F I C A C I O N'), array('action' => 'add')); ?></li>
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mensaje'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($tIPONOTIFICACIONs as $tIPONOTIFICACION): ?>
	<tr>
		<td><?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['id']); ?>&nbsp;</td>
		<td><?php echo h($tIPONOTIFICACION['TIPONOTIFICACION']['mensaje']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($tIPONOTIFICACION['TIPONOTIFICACION']['id']);?>
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
		<li><?php echo $this->Html->link(__('New T I P O N O T I F I C A C I O N'), array('action' => 'add')); ?></li>
	</ul>-->
</div>
