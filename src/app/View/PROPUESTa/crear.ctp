<ul class="breadcrumb">
  <li><a href="/">Home</a> <span class="divider">/</span></li>
  <li><a href="/PROPUESTa/index">Propuesta</a> <span class="divider">/</span></li>
  <li class="active">Realizar Propuesta<span class="divider">/</span></li>
</ul>
<div class="pROPUESTa form">
<?php echo $this->Form->create('PROPUESTum'); ?>
	<fieldset>
		<legend>
			<div class="row-fluid">
				<div class="span3">
					<strong><?php echo __('Hacer un propuesta'); ?></strong>
				</div>
			</div>	
		</legend>
		<?php
			echo $this->Form->input('tipo_pro_id', array(
				'label' => 'Tipo de proyecto'
			));
			echo $this->Form->input('AREA', array(
				'label' => 'Área funcional',
			));
			echo $this->Form->input('descripcion', array(
				'label' => 'Descripción',
				'type' =>'textarea',
				'class' => 'span8 offset1'
			));
			echo $this->Form->input('cartera_id', array('label'=>'Cartera'));
			echo $this->Form->input('resumen', array(
				'label' => 'Resumen',
				'type' =>'textarea',
				'class' => 'span8 offset1'
			));
			echo $this->Form->input('justificacion', array(
				'label' => 'Justificación',
				'type' =>'textarea',
				'class' => 'span8 offset1'
			));
			//echo $this->Form->input('fecha_limite');
			//echo $this->Form->input('estado');
			//echo $this->Form->input('solicitante_id');
			//echo $this->Form->input('cartera_id');
			//echo $this->Form->input('valoracion_cio_id');
			//echo $this->Form->input('tecnico_id');
			//echo $this->Form->input('patrocinador_id');
			//echo $this->Form->input('responsable_id');
			
			//echo $this->Form->input('OBJETIVO');
		?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Crear Propuesta', 'class'=>'btn btn-success btn-large')); ?>
</div>
