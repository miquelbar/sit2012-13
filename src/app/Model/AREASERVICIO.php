<?php
App::uses('AppModel', 'Model');
/**
 * AREASERVICIO Model
 *
 * @property AreaFuncional $AreaFuncional
 * @property Servicio $Servicio
 */
class AREASERVICIO extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'AREA_SERVICIO';

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
			'className' => 'AreaFuncional',
			'foreignKey' => 'area_funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Servicio' => array(
			'className' => 'Servicio',
			'foreignKey' => 'servicio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
