<div class="pRINCIPIOTICs index">
	<h2><?php echo __('Principios TIC'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pRINCIPIOTICs as $pRINCIPIOTIC): ?>
	<tr>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['id']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($pRINCIPIOTIC['PRINCIPIOTIC']['fecha_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($pRINCIPIOTIC['PRINCIPIOTIC']['id']);?>		
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} en total, empezando por {:start} y acabando en {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()){
			echo $this->Paginator->prev('< ' . __('anterior'), array('class'=>'btn'), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		}
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo principio TIC'), array('action' => 'add')); ?></li>
	</ul>
</div>
