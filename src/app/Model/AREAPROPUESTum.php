<?php
App::uses('AppModel', 'Model');
/**
 * AREAPROPUESTA Model
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
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AreaFuncional' => array(
			'className' => 'AREAFUNCIONAL',
			'foreignKey' => 'area_funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propuesta' => array(
			'className' => 'PROPUESTum	',
			'foreignKey' => 'propuesta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
