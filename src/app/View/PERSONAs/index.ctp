<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Personas<span class="divider">/</span></li>
</ul>
<div class="pERSONAs index">
	<div class="row-fluid">
	<div class="span10"><h2><?php echo __('Personas'); ?></h2></div>
	<div class="span1">
		<div class="btn-group">
	  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
	    		Acciones
	    		<span class="caret"></span>
	  		</a>
	  		<ul class="dropdown-menu">
	  			<? if ($puedeEditar) { ?>
	  			<li><?php echo $this->Html->link(__('Nueva persona'), array('action' => 'add')); ?> </li>
	  			<? } ?>
				<li><?php echo $this->Html->link(__('Ver Personas'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
				<!--<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
			</ul>
	  	</div>
	</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Primer Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('Segundo Apellido'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($pERSONAs as $pERSONA): ?>
	<tr>
		<td><?php echo h($pERSONA['PERSONA']['id']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['apellido1']); ?>&nbsp;</td>
		<td><?php echo h($pERSONA['PERSONA']['apellido2']); ?>&nbsp;</td>
		<td class="actions">
			<?= $this->CrudActions->makeRowCrud($pERSONA['PERSONA']['id'], $puedeEditar);?>		
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
		<li><?php echo $this->Html->link(__('Nueva persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar áreas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
	</ul>
-->
</div>
