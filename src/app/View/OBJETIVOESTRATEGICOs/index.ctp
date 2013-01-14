<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Objetivos Estrategicos<span class="divider">/</span></li>
</ul>
<div class="oBJETIVOESTRATEGICOs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Objetivos Estrategicos'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
							<li><?php echo $this->Html->link(__('New O B J E T I V O E S T R A T E G I C O'), array('action' => 'add')); ?></li>
							<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
							<li><?php echo $this->Html->link(__('New Principio Tic'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('principio_tic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_fin'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($oBJETIVOESTRATEGICOs as $oBJETIVOESTRATEGICO): ?>
	<tr>
		<td><?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['descripcion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oBJETIVOESTRATEGICO['PrincipioTic']['nombre'], array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'view', $oBJETIVOESTRATEGICO['PrincipioTic']['id'])); ?>
		</td>
		<td><?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_inicio']); ?>&nbsp;</td>
		<td><?php echo h($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['fecha_fin']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($oBJETIVOESTRATEGICO['OBJETIVOESTRATEGICO']['id']);?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New O B J E T I V O E S T R A T E G I C O'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Principio Tic'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>
	</ul>
</div>
