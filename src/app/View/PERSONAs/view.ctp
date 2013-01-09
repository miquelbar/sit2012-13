<ul class="breadcrumb">
  <li><a href="/PERSONAs/index">Personas</a> <span class="divider">/</span></li>
  <li class="active"><?=$pERSONA['PERSONA']['nombre']?><span class="divider">/</span></li>
</ul>

<div class="pERSONAs view">
<legend>
<div class="row-fluid">
	<div class="span3"><strong><?php  echo __("Persona - ". $pERSONA['PERSONA']['nombre']); ?></strong></div>
	<div class="span1">
		<div class="btn-group">
	  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
	    		Acciones
	    		<span class="caret"></span>
	  		</a>
	  		<ul class="dropdown-menu">
	    	<!-- dropdown menu links -->
	    		<li><?php echo $this->Html->link(__('Editar persona'), array('action' => 'edit', $pERSONA['PERSONA']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar persona'), array('action' => 'delete', $pERSONA['PERSONA']['id']), null, __('Are you sure you want to delete # %s?', $pERSONA['PERSONA']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar personas'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nueva persona'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar áreas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
	  		</ul>
		</div>
	</div>
</div> 
</legend>	
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido1'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['apellido1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido2'); ?></dt>
		<dd>
			<?php echo h($pERSONA['PERSONA']['apellido2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<?php if (!empty($pERSONA['AREAFUNCIONAL'])): ?>
	<h3><?php echo __('Áreas funcionales de Persona'); ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pERSONA['AREAFUNCIONAL'] as $aREAFUNCIONAL): ?>
		<tr>
			<td><?php echo $aREAFUNCIONAL['id']; ?></td>
			<td><?php echo $aREAFUNCIONAL['nombre']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

<div class="actions">
	
	<!--
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar persona'), array('action' => 'edit', $pERSONA['PERSONA']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar persona'), array('action' => 'delete', $pERSONA['PERSONA']['id']), null, __('Are you sure you want to delete # %s?', $pERSONA['PERSONA']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar áreas funcionales'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva área funcional.'), array('controller' => 'a_r_e_a_f_u_n_c_i_o_n_a_ls', 'action' => 'add')); ?> </li>
	</ul>
	-->
</div>
