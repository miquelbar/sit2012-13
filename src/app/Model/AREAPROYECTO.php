<?php
App::uses('AppModel', 'Model');
/**
 * AREAPROYECTO Model
 *
 * @property Proyecto $Proyecto
 * @property AreaFuncional $AreaFuncional
 */
class AREAPROYECTO extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'AREA_PROYECTO';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'proyecto_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AreaFuncional' => array(
			'className' => 'AreaFuncional',
			'foreignKey' => 'area_funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
