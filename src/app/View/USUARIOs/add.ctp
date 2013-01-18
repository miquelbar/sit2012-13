<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/USUARIOs/index">Usuarios</a> <span class="divider">/</span></li>
  <li class="active">A&ntilde;adir<span class="divider">/</span></li>
</ul>
<div class="uSUARIOs form">
		<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('A&ntilde;adir Usuario'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
<?php echo $this->Form->create('USUARIO'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('correo');
		echo $this->Form->input('clave');
		echo $this->Form->input('bloqueado');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('PERFIL');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Añadir', 'class'=>'btn btn-success btn-large')); ?>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
	</ul>-->
</div>
