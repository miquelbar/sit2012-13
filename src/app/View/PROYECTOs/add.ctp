<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROYECTOs/index">Proyectos</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;adir<span class="divider">/</span></li>
</ul>
<div class="pROYECTOs form">
<?php echo $this->Form->create('PROYECTO'); ?>
	<fieldset>
		<legend>
			<div class="row-fluid">
			<div class="span2">
					<strong><?php echo __('Añadir Proyecto'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Ver Proyectos'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Ver Carteras'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Propuestas'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'add')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('List E S T A D O P R O Y E C T Os'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>-->
						<!--<li><?php echo $this->Html->link(__('New Estado Proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Usuarios'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New Patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Objetivos Estratégicos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Ver Objetivos Tácticos'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Servicios'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<?php
		
		if (isset($propuesta)){
			?>
			<input type="hidden" name="data[PROYECTO][propuesta_id]" value="<?=$propuesta?>"/>
			<?
		//echo $this->Form->input('estado_proyecto_id');
		}
		?>
		<input type="hidden" name="data[PROYECTO][estado_proyecto_id]" value="1"/>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
		<tr>
			<td><?echo $this->Form->input('cartera_id');?></td>
			<td><?echo $this->Form->input('codigo');?></td>
			<td><?echo $this->Form->input('nombre');?></td>
			<td><?echo $this->Form->input('tipo_pro_id');?></td>
		</tr>
		</table>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
		<tr>
			<td>
				<?
				if (isset($patrocinador)){
				?>
				<input value="<?=$patrocinador['id']?>" readonly="readonly" type="hidden" name="data[PROYECTO][patrocinador_id]"/>
				<strong>Patrocinador:</strong> <?=$patrocinador['nombre']?>
				<? 
				} else {
					echo $this->Form->input('patrocinador_id');
				}	
				?>
			</td>
			<td>
				<?
				if (isset($responsable)){
				?>
				<input value="<?=$responsable['id']?>" readonly="readonly" type="hidden" name="data[PROYECTO][responsable_id]"/>
				<strong>Responsable: </strong><?=$responsable['nombre']?>
				<?
				} else {
					 echo $this->Form->input('responsable_id');
				}
				?>
			</td>
		</tr>
		</table>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
		<tr>
			<td><?echo $this->Form->input('fecha_inicio_prevista');?></td>
		</tr>
		<tr>
			<td><?echo $this->Form->input('fecha_fin_prevista');?></td>
		</tr>
		</table>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
			<tr>
			<td><?echo $this->Form->input('descripcion', array(
				'label' => 'Descripción',
				'type' =>'textarea',
				'class' => 'span6 offset1',
				'value' => isset($descripcion) ? $descripcion : ''
			));?></td>
			<td><?echo $this->Form->input('justificacion', array(
				'label' => 'Justificación',
				'type' =>'textarea',
				'class' => 'span6 offset1',
				'value' => isset($justificacion) ? $justificacion : ''
			));?></td>
			</tr>
		</table>
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover span12">
			<tr>
				<td><?echo $this->Form->input('AREA', array(
					'label' => 'Área',
					'class' => 'span6 offset1',
					'style' =>'height:200px'
				));?>
				<td><?echo $this->Form->input('OBJETIVO', array(
					'label' => 'Objetivos Tácticos',
					'class' => 'span6 offset1',
					'style' =>'height:200px'
				));?>
			</tr>
		</table>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Crear Proyecto', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List P R O Y E C T Os'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List C A R T E R As'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cartera'), array('controller' => 'c_a_r_t_e_r_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P R O P U E S T As'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Propuesta'), array('controller' => 'p_r_o_p_u_e_s_t_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List T I P O P R Os'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Pro'), array('controller' => 't_i_p_o_p_r_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List E S T A D O P R O Y E C T Os'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Proyecto'), array('controller' => 'e_s_t_a_d_o_p_r_o_y_e_c_t_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List U S U A R I Os'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrocinador'), array('controller' => 'u_s_u_a_r_i_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List S E R V I C I Os'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New S E R V I C I O'), array('controller' => 's_e_r_v_i_c_i_os', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
