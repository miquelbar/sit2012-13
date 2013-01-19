<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/AREAPERSONAs/index">&Aacute;rea Persona</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;dir<span class="divider">/</span></li>
</ul>
<div class="aREAPERSONAs form">

	
		<legend>
		<div class="row-fluid">
			<div class="span3">
				
					<strong><?php echo __('A&ntilde;adir &aacute;rea Persona'); ?></strong>
				
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Ver Área Persona'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nueva &Aacute;rea Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
	<?php echo $this->Form->create('AREAPERSONA'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('area_funcional_id');
		echo $this->Form->input('persona_id');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Añadir Área Persona', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
