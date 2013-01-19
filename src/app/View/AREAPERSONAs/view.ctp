<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/AREAPERSONAs/index">&Aacute;rea Persona</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
<div class="aREAPERSONAs view">
<legend>
		<div class="row-fluid">
			<div class="span3">
				
					<strong><?php echo __('Ver Área Persona'); ?></strong>
				
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__('Editar Área Persona'), array('action' => 'edit', $aREAPERSONA['AREAPERSONA']['id'])); ?> </li>
						<li><?php echo $this->Form->postLink(__('Eliminar Área Persona'), array('action' => 'delete', $aREAPERSONA['AREAPERSONA']['id']), null, __('Are you sure you want to delete # %s?', $aREAPERSONA['AREAPERSONA']['id'])); ?> </li>
						<li><?php echo $this->Html->link(__('Ver Área Persona'), array('action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Añadir Área Persona'), array('action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Áreas Funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Añadir Área Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>-->
						<li><?php echo $this->Html->link(__('Ver Personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
						<!--<li><?php echo $this->Html->link(__('Añadir Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>-->
			  		</ul>
			  </div>
			</div>
		</div>
		</legend>
		<table cellpadding="0" cellspacing="0"  class="table table-striped table-bordered table-hover span6">
			<tr>
				<td><strong><?php echo __('Id'); ?></strong></td>
				<td>
					<?php echo h($aREAPERSONA['AREAPERSONA']['id']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Área Funcional'); ?></strong></td>
				<td>
					<?php echo $this->Html->link($aREAPERSONA['AreaFuncional']['nombre'], array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'view', $aREAPERSONA['AreaFuncional']['id'])); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<td><strong><?php echo __('Persona'); ?></strong></td>
				<td>
					<?php echo $this->Html->link($aREAPERSONA['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $aREAPERSONA['Persona']['id'])); ?>
					&nbsp;
				</td>
			</tr>
		</table>
</div>
<div class="actions">
<!--	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit A R E A P E R S O N A'), array('action' => 'edit', $aREAPERSONA['AREAPERSONA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete A R E A P E R S O N A'), array('action' => 'delete', $aREAPERSONA['AREAPERSONA']['id']), null, __('Are you sure you want to delete # %s?', $aREAPERSONA['AREAPERSONA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A P E R S O N As'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New A R E A P E R S O N A'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List A R E A F U N C I O N A Ls'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area Funcional'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P E R S O N As'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	</ul>-->
</div>
