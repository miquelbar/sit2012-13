<ul class="breadcrumb">
	<li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/USUARIOs/index">Usuarios</a> <span class="divider">/</span></li>
  <li class="active">Ver<span class="divider">/</span></li>
</ul>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script type="text/javascript">
	
</script>

<script>
  // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

		function drawChart(){
			<?=$test?>
		}		
 	</script>

</script>
<div class="uSUARIOs view">
<legend>
		<div class="row-fluid">
			<div class="span3">
					<strong><?php echo __('Ver Usuario'); ?></strong>
			</div>
			<div class="span1">
				<div class="btn-group">
			  		<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
			    		Acciones
			    		<span class="caret"></span>
			  		</a>
			  		<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Editar usuario'), array('action' => 'edit', $uSUARIO['USUARIO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('USUARIO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('USUARIO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
		<!--<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>			  		</ul>-->
			  </div>
			</div>
		</div>
		</legend>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uSUARIO['USUARIO']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($uSUARIO['USUARIO']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($uSUARIO['USUARIO']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($uSUARIO['USUARIO']['bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($uSUARIO['Persona']['nombre'], array('controller' => 'p_e_r_s_o_n_as', 'action' => 'view', $uSUARIO['Persona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Perfiles del usuario'); ?></h3>
	<?php if (!empty($uSUARIO['PERFIL'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped table-bordered table-hover span4">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uSUARIO['PERFIL'] as $pERFIL): ?>
		<tr>
			<td><?php echo $pERFIL['id']; ?></td>
			<td><?php echo $pERFIL['nombre']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div id="tst"></div>

<div class="actions">
<!--	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar usuario'), array('action' => 'edit', $uSUARIO['USUARIO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('USUARIO.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('USUARIO.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar personas'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva persona'), array('controller' => 'p_e_r_s_o_n_as', 'action' => 'add')); ?> </li>
	
	</ul>-->
</div>
