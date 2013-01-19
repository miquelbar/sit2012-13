<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PERSONAs/index">Personas</a> <span class="divider">/</span></li>
  <li class="active">Editar Persona<span class="divider">/</span></li>
</ul>
<div class="pERSONAs form">

	<legend >
		<div class="row-fluid">
			<div class="span2"><strong><?php echo __('Editar Persona'); ?></strong></div>
			<div class="btn-group span1" >
		  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
		    		Acciones
		    		<span class="caret"></span>
		  		</a>
		  		<ul class="dropdown-menu">
		    	<!-- dropdown menu links -->
			    	<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PERSONA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PERSONA.id'))); ?></li>
					<li><?php echo $this->Html->link(__('Listar personas'), array('action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Listar áreas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
					<!--<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
		  		</ul>
			</div>
		</div>
	</legend>
<?php echo $this->Form->create('PERSONA'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido1');
		echo $this->Form->input('apellido2');
		echo $this->Form->input('AREAFUNCIONAL');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Editar Persona', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('PERSONA.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PERSONA.id'))); ?></li>
				<li><?php echo $this->Html->link(__('Listar personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar áreas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
	</ul>
	</ul>
-->
</div>
