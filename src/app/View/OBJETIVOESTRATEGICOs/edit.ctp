<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/OBJETIVOESTRATEGICOs/index">Objetivos Estrat&eacute;gicos</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="oBJETIVOESTRATEGICOs form">
		<legend>
		<div class="row-fluid">
			<div class="span4">
					<strong><?php echo __('Editar objetivo estrategico'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
								<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('OBJETIVOESTRATEGICO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OBJETIVOESTRATEGICO.id'))); ?></li>
								<li><?php echo $this->Html->link(__('Ver Objetivos Estratégicos'), array('action' => 'index')); ?></li>
								<li><?php echo $this->Html->link(__('Ver Principio TIC'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
								<!--<li><?php echo $this->Html->link(__('Nuevo Principio TIC'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('OBJETIVOESTRATEGICO'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('principio_tic_id');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_fin');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Editar Objetivo Estratégico', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OBJETIVOESTRATEGICO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OBJETIVOESTRATEGICO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List P R I N C I P I O T I Cs'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Principio Tic'), array('controller' => 'p_r_i_n_c_i_p_i_o_t_i_cs', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
