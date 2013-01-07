<?php
App::uses('AppModel', 'Model');
/**
 * VALORMETRICA Model
 *
 * @property Metrica $Metrica
 * @property Proyecto $Proyecto
 * @property Propuesta $Propuesta
 * @property Servicio $Servicio
 */
class VALORMETRICA extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'VALOR_METRICA';

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
		'Metrica' => array(
			'className' => 'Metrica',
			'foreignKey' => 'metrica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proyecto' => array(
			'className' => 'Proyecto',
			'foreignKey' => 'proyecto_id',
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
