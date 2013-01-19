<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li class="active">Notificaciones<span class="divider">/</span></li>
</ul>
<div class="nOTIFICACIONs index">
	<div class="row-fluid">
		<div class="span10"><h2><?php echo __('Notificaciones'); ?></h2></div>
		<div class="span1">
			<div class="btn-group">
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
					<!--<li><?php echo $this->Html->link(__('Nueva Notificaci&oacute;n'), array('action' => 'add')); ?></li>-->
					<li><?php echo $this->Html->link(__('Ver Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('A&ntilde;adir Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
					<!--<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>-->
				</ul>
		  	</div>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_notificacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('texto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($nOTIFICACIONs as $nOTIFICACION): ?>
	<tr>
		<td><?php echo h($nOTIFICACION['NOTIFICACION']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nOTIFICACION['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $nOTIFICACION['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $nOTIFICACION['TipoNotificacion']['mensaje']; ?>
		</td>
		<td><?php echo $nOTIFICACION['NOTIFICACION']['texto']; ?>&nbsp;</td>
		<td class="actions">
			<?=$this->Form->postLink(__('Eliminar'), array('action' => 'delete', $nOTIFICACION['NOTIFICACION']['id']), array('class' =>'btn btn-danger'), __('Estás seguro de que lo quieres eliminar el registro # %s?', $nOTIFICACION['NOTIFICACION']['id'])); ?> 
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
<div class="actions">
	<!--<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New N O T I F I C A C I O N'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
