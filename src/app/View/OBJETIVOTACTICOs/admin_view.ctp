<div class="oBJETIVOTACTICOs view">
<h2><?php  echo __('O B J E T I V O T A C T I C O'); ?></h2>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit O B J E T I V O T A C T I C O'), array('action' => 'edit', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete O B J E T I V O T A C T I C O'), array('action' => 'delete', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id']), null, __('Are you sure you want to delete # %s?', $oBJETIVOTACTICO['OBJETIVOTACTICO']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O T A C T I C Os'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New O B J E T I V O T A C T I C O'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List O B J E T I V O E S T R A T E G I C Os'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objetivo Estrategico'), array('controller' => 'o_b_j_e_t_i_v_o_e_s_t_r_a_t_e_g_i_c_os', 'action' => 'add')); ?> </li>
	</ul>
</div>
