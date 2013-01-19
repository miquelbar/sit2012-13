<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Usuarios<span class="divider">/</span></li>
</ul>
<div class="uSUARIOs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Usuarios'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
					<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
				</ul>
		  	</div>
		</div>
	</div>

	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('bloqueado'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($uSUARIOs as $uSUARIO): ?>
	<tr>
		<td><?php echo h($uSUARIO['USUARIO']['id']); ?>&nbsp;</td>
		<td><?php echo h($uSUARIO['USUARIO']['correo']); ?>&nbsp;</td>
		<td><?php echo h($uSUARIO['USUARIO']['clave']); ?>&nbsp;</td>
		<td><?php echo h($uSUARIO['USUARIO']['bloqueado']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($uSUARIO['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $uSUARIO['Persona']['id'])); ?>
		</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($uSUARIO['USUARIO']['id'], $puedeEditar);?>		
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
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
	</ul>-->
</div>
