<?php
App::uses('AppModel', 'Model');
/**
 * PROPUESTA Model
 *
 * @property Solicitante $Solicitante
 * @property Cartera $Cartera
 * @property ValoracionCio $ValoracionCio
 * @property USUARIO $Tecnico
 * @property USUARIO $Patrocinador
 * @property USUARIO $Responsable
 * @property TipoPro $TipoPro
 * @property AREA $AREA
 * @property OBJETIVO $OBJETIVO
 */
class PROPUESTum extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'PROPUESTA';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_creacion' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descripcion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'resumen' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'justificacion' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_limite' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				'message' => 'Debe insertar una fecha válida',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'solicitante_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cartera_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El id debe ser un número.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valoracion_cio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El id debe ser un número.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tecnico_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El id debe ser un número.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'patrocinador_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El id debe ser un número.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El id debe ser un número.',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_pro_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Solicitante' => array(
			'className' => 'PERSONA',
			'foreignKey' => 'solicitante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cartera' => array(
			'className' => 'CARTERA',
			'foreignKey' => 'cartera_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ValoracionCio' => array(
			'className' => 'VALORACIONCIO',
			'foreignKey' => 'valoracion_cio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tecnico' => array(
			'className' => 'PERSONA',
			'foreignKey' => 'tecnico_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Patrocinador' => array(
			'className' => 'PERSONA',
			'foreignKey' => 'patrocinador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Responsable' => array(
			'className' => 'PERSONA',
			'foreignKey' => 'responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoPro' => array(
			'className' => 'TIPOPRO',
			'foreignKey' => 'tipo_pro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'AREA' => array(
			'className' => 'AREAFUNCIONAL',
			'joinTable' => 'AREA_PROPUESTA',
			'foreignKey' => 'propuesta_id',
			'associationForeignKey' => 'area_funcional_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'OBJETIVO' => array(
			'className' => 'OBJETIVOTACTICO',
			'joinTable' => 'OBJETIVO_PROPUESTA',
			'foreignKey' => 'propuesta_id',
			'associationForeignKey' => 'objetivo_tactico_id',
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
