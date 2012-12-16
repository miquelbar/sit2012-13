<?php
App::uses('AppModel', 'Model');
/**
 * AREAPROPUESTum Model
 *
 * @property AreaFuncional $AreaFuncional
 * @property Propuesta $Propuesta
 */
class AREAPROPUESTum extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'AREA_PROPUESTA';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'area_funcional_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'area_funcional_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AreaFuncional' => array(
			'className' => 'AreaFuncional',
			'foreignKey' => 'area_funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propuesta' => array(
			'className' => 'Propuesta',
			'foreignKey' => 'propuesta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
