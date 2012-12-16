<?php
App::uses('AppModel', 'Model');
/**
 * AREAPERSONA Model
 *
 * @property AreaFuncional $AreaFuncional
 * @property Persona $Persona
 */
class AREAPERSONA extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'AREA_PERSONA';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'area_funcional_id';


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
		'Persona' => array(
			'className' => 'PERSONA',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
