<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROPUESTa/index">Propuesta</a> <span class="divider">/</span></li>
  <li class="active">Editar<span class="divider">/</span></li>
</ul>
<div class="pROPUESTa form">
<?php echo $this->Form->create('PROPUESTum'); ?>
	<fieldset>
		<legend>
			<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Editar Propuesta'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PROPUESTum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PROPUESTum.id'))); ?></li>
						<li><?php echo $this->Html->link(__('Ver Propuestas'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir Solicitante'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir Carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Ver Valoraciones CIO'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir Valoraci&oacute;n CIO'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'add')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver &Aacute;reas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir &Aacute;rea Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
						<li><?php echo $this->Html->link(__('Ver Objetivs T&aacute;cticos'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('A&ntilde;adir Objetivo T&aacute;ctico'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
			  </div>
			</div>
		</div>
		</legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_creacion');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('resumen');
		echo $this->Form->input('justificacion');
		echo $this->Form->input('fecha_limite');
		echo $this->Form->input('estado');
		echo $this->Form->input('solicitante_id');
		echo $this->Form->input('cartera_id');
		echo $this->Form->input('valoracion_cio_id');
		echo $this->Form->input('tecnico_id');
		echo $this->Form->input('patrocinador_id');
		echo $this->Form->input('responsable_id');
		echo $this->Form->input('tipo_pro_id');
		echo $this->Form->input('AREA');
		echo $this->Form->input('OBJETIVO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
<!--	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PROPUESTum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PROPUESTum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List P R O P U E S Ta'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Solicitante'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List V A L O R A C I O N C I Os'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valoracion Cio'), array('controller' => 'v_a_l_o_r_a_c_i_o_n_c_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O T A C T I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_t_a_c_t_i_c_os', 'action' => 'add')); ?> </li>
</ul>-->
</div>
