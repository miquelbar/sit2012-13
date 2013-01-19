<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/OBJETIVOTACTICOs/index">Objetivos T&aacute;cticos</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="oBJETIVOTACTICOs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Editar Objetivo Táctico'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('OBJETIVOTACTICO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OBJETIVOTACTICO.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Listar objetivos tácticos'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Listar objetivos estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('OBJETIVOTACTICO'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('objetivo_estrategico_id');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Editar Objetivo Táctico', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('OBJETIVOTACTICO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OBJETIVOTACTICO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar objetivos tácticos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
