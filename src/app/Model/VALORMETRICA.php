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
			'className' => 'METRICA',
			'foreignKey' => 'metrica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proyecto' => array(
			'className' => 'PROYECTO',
			'foreignKey' => 'proyecto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propuesta' => array(
			'className' => 'PROPUESTum',
			'foreignKey' => 'propuesta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Servicio' => array(
			'className' => 'SERVICIO',
			'foreignKey' => 'servicio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function procesarMetrica($data, $idPadre, $para){
		//PROCESAR CAMBIOS EN METRICAS
		foreach ($data as $key => $value) {
			if (substr($key, 0,2) == 'm_'){
				$id = substr($key, 2,1);
				$update = array(
					'valor' => $value,
					'fecha' => date('Y-m-d H:i:s'),
					$para => $idPadre
				);
				if (is_numeric($id)){
					$id = intval(substr($key, 2));
					$this->id = $id;
				} else {
					if ($id == "X" && is_numeric(substr($key, 3,1))){
						$this->create();
						$update['metrica_id'] = intval(substr($key, 3,1));
					}
				}
				print_r($update);
				$this->save($update);
			}
		}
	}
}
