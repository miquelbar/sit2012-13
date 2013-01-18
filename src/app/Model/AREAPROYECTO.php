<?php
App::uses('AppModel', 'Model');
/**
 * AREAPROYECTO Model
 *
 * @property Proyecto $Proyecto
 * @property AreaFuncional $AreaFuncional
 * @property  $
 */
class AREAPROYECTO extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'AREA_PROYECTO';

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
		'Proyecto' => array(
			'className' => 'PROYECTO',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AreaFuncional' => array(
			'className' => 'AREAFUNCIONAL',
			'foreignKey' => 'area_funcional_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'' => array(
			'className' => '',
			'foreignKey' => 'a_r_e_a_p_r_o_y_e_c_t_o_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
