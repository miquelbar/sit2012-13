<ul class="breadcrumb">
  <li><a href="/SERVICIOs/index">Servicios</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="sERVICIOs form">
		<legend>
		<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Editar Servicio'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('SERVICIO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SERVICIO.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Listar proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('SERVICIO'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_final');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('AREAFUNCIONAL');
		echo $this->Form->input('PROYECTO');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Guardar', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('SERVICIO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SERVICIO.id'))); ?></li>
<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar areas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva area funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar proyectos'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo proyecto'), array('controller' => 'p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
