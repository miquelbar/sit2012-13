<div class="oBJETIVOTACTICOs view">
<h2><?php  echo __('Objetivo Táctico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo Estrategico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($oBJETIVOTACTICO['ObjetivoEstrategico']['nombre'], array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'view', $oBJETIVOTACTICO['ObjetivoEstrategico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin'); ?></dt>
		<dd>
			<?php echo h($oBJETIVOTACTICO['OBJETIVOTACTICO']['fecha_fin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar objetivo táctico.'), array('action' => 'edit', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar objetivo táctico.'), array('action' => 'delete', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar objetivos tácticos.'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo táctico.'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar objetivos estratégicos.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo objetivo estratégico.'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
