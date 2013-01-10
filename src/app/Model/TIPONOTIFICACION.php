<?php
App::uses('AppModel', 'Model');
/**
 * TIPONOTIFICACION Model
 *
 */
class TIPONOTIFICACION extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'TIPO_NOTIFICACION';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'mensaje';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mensaje' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
