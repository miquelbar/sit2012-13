<?php
App::uses('AppModel', 'Model');
/**
 * PERFIL Model
 *
 * @property USUARIO $USUARIO
 */
class PERFIL extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'PERFIL';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'USUARIO' => array(
			'className' => 'USUARIO',
			'joinTable' => 'PERFIL_USUARIO',
			'foreignKey' => 'perfil_id',
			'associationForeignKey' => 'usuario_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
