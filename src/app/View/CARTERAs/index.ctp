<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Carteras<span class="divider">/</span></li>
</ul>
<div class="cARTERAs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Carteras'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Nueva Cartera'), array('action' => 'add')); ?></li>
				</ul>
		  	</div>
		</div>
	</div>

	<!--<h2><?php echo __('C A R T E R As'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_periodo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_periodo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ultima_discusion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_obtencion_definitiva'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_validez'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin_validez'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ultima_modificacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($cARTERAs as $cARTERA): ?>
	<tr>
		<td><?php echo h($cARTERA['CARTERA']['id']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_creacion']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_inicio_periodo']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_fin_periodo']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_ultima_discusion']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_obtencion_definitiva']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_inicio_validez']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_fin_validez']); ?>&nbsp;</td>
		<td><?php echo h($cARTERA['CARTERA']['fecha_ultima_modificacion']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($cARTERA['CARTERA']['id'], $puedeEditar);?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New C A R T E R A'), array('action' => 'add')); ?></li>
	</ul>-->
</div>
