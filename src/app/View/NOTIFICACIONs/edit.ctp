<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/NOTIFICACIONs/index">Notificaciones</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="nOTIFICACIONs form">
	<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Editar Notificación'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('NOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NOTIFICACION.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Notificaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<fieldset>
<?php echo $this->Form->create('NOTIFICACION'); ?>
	
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('tipo_notificacion_id');
		echo $this->Form->input('texto');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Editar Notificación', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NOTIFICACION.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NOTIFICACION.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List N O T I F I C A C I O Ns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O N O T I F I C A C I O Ns'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Notificacion'), array('controller' => 't_i_p_o_n_o_t_i_f_i_c_a_c_i_o_ns', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
