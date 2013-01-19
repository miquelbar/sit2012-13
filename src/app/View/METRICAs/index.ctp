<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">M&eacute;tricas<span class="divider">/</span></li>
</ul>
<div class="mETRICAs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('M&eacute;tricas'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Nueva Métrica'), array('action' => 'add')); ?></li>
				</ul>
		  	</div>
		</div>
	</div>
	<!--<h2><?php echo __('M E T R I C As'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('para_propuesta'); ?></th>
			<th><?php echo $this->Paginator->sort('para_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('para_servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('unidades'); ?></th>
			<th><?php echo $this->Paginator->sort('dominio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($mETRICAs as $mETRICA): ?>
	<tr>
		<td><?php echo h($mETRICA['METRICA']['id']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_propuesta']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['para_servicio']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['unidades']); ?>&nbsp;</td>
		<td><?php echo h($mETRICA['METRICA']['dominio']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($mETRICA['METRICA']['id'], $puedeEditar	);?>
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

	<div class="paginator">
    <ul>
    <?php
        if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()){
            echo $this->Paginator->prev('<<<', array('class'=>'btn'), null, array('class' => 'btn prev disabled'));
            echo $this->Paginator->numbers(array('separator'=>'','class'=>"btn", 'href=#', 'tag'=>'li'));
            echo $this->Paginator->next('>>>', array('class'=>'btn'), null, array('class' => 'btn next disabled'));
        }
    ?>
    </ul>
    </div>
</div>
<div class="actions">
<!--
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New M E T R I C A'), array('action' => 'add')); ?></li>
	</ul>
-->
</div>
