<?php
App::uses('AppController', 'Controller');
/**
 * PROPUESTum Controller
 *
 * @property PROPUESTum $PROPUESTum
 */
class PROPUESTaController extends AppController {
	var $paginate = array(
        'fields' => array('*'),
        'limit' => 5,
        'order' => array(
            'PROPUESTum.fecha_creacion' => 'DESC'
        )
    );
	
	public $uses = array('PROPUESTum','COMENTARIO');
	
	const ESTADO_PENDIENTE_ASIGNAR = 0;
	const ESTADO_PENDIENTE_VALORACION_TECNICA = 3;
	const ESTADO_PENDIENTE_VISTOBUENO = 1;
	const ESTADO_PENDIENTE_CONVERSACION = 2;
	const ESTADO_PENDIENTE_ACEPTACION_TECNICO = 4;
	const ESTADO_PENDIENTE_VALORACION_CIO = 5;
	const ESTADO_DESCARTADA = 6;
	const ESTADO_ACEPTADA = 7;
	
	public static $estados = array(
		self::ESTADO_PENDIENTE_ASIGNAR => 'Pendiente de ser asignada a un técnico.',
		self::ESTADO_PENDIENTE_VISTOBUENO => 'Pendiente de confirmación del solicitante.',
		self::ESTADO_PENDIENTE_CONVERSACION => 'La propuesta se está negociando.',
		self::ESTADO_PENDIENTE_VALORACION_TECNICA => 'La propuesta está pediente de valoración técnica.',
		self::ESTADO_PENDIENTE_ACEPTACION_TECNICO => 'La propuesta está pendiente de confirmación técnica.',
		self::ESTADO_DESCARTADA => 'La propuesta ha sido descartada.',
		self::ESTADO_ACEPTADA => 'La propuesta ha sido aceptada.',
		self::ESTADO_PENDIENTE_VALORACION_CIO => 'La propuesta está pendiente de valoración del CIO.'
	);
	
	public static $colores = array(
		self::ESTADO_PENDIENTE_ASIGNAR => 'primary',
		self::ESTADO_PENDIENTE_VISTOBUENO => 'warning',
		self::ESTADO_PENDIENTE_CONVERSACION => 'warning',
		self::ESTADO_PENDIENTE_VALORACION_TECNICA => 'info',
		self::ESTADO_PENDIENTE_ACEPTACION_TECNICO => 'info',
		self::ESTADO_DESCARTADA => 'error',
		self::ESTADO_ACEPTADA => 'success',
		self::ESTADO_PENDIENTE_VALORACION_CIO => 'info'
	);
	
	public static $campos = array(
		array(
			'descripcion',
			'resumen',
			'justificacion',
		),
		
		array(
		),
		
		array(
		)
	);
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PROPUESTum->recursive = 0;
		$this->set('pROPUESTa', $this->paginate());
		$this->set('estados', self::$estados);
		$this->set('colores', self::$colores);
	}
	
	public function mispropuestas() {
		$this->PROPUESTum->recursive = 0;
		$filter = array(
			'PROPUESTum.solicitante_id'=> $this->usuario['Persona']['id']
		);
		$this->set('pROPUESTa', $this->paginate($filter));
		$this->set('estados', self::$estados);
		$this->set('colores', self::$colores);
	}
	
	public function pendientes() {
		$this->PROPUESTum->recursive = 0;
		$filter = array(
			'PROPUESTum.estado'=> array(
									self::ESTADO_PENDIENTE_ASIGNAR, 
									self::ESTADO_PENDIENTE_VALORACION_TECNICA,
									self::ESTADO_PENDIENTE_ACEPTACION_TECNICO
									) 
		);
		$this->set('pROPUESTa', $this->paginate($filter));
		$this->set('estados', self::$estados);
		$this->set('colores', self::$colores);
	}
	
	public function pendientescio() {
		$this->PROPUESTum->recursive = 0;
		$filter = array(
			'PROPUESTum.estado'=> self::ESTADO_PENDIENTE_VALORACION_CIO
		);
		$this->set('pROPUESTa', $this->paginate($filter));
		$this->set('estados', self::$estados);
		$this->set('colores', self::$colores);
	}

/**$this->request->data
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		$propuesta = $this->PROPUESTum->read(null, $id);
		$this->set('pROPUESTum', $propuesta);
		$this->set('estado', self::$estados[$propuesta['PROPUESTum']['estado']]);
	}
	
	public function asignartec($id = null){
		try {
			
			$this->PROPUESTum->id = $id;
			if (!$this->PROPUESTum->exists()) {
				throw new NotFoundException(__('La propuesta no existe.'));
			}
			
			$update = array();
			$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_VALORACION_TECNICA;
			$mes = (date('m')+1) %12;
			$year = (date('m')+1)/12;
			$update['PROPUESTum']['fecha_limite'] = array(
				'month' => $mes == 0 ? 12 : $mes, 
				'day' => date('d'),
				'year' => date('y'),
				'min' => date('i'),
				'meridian' => date('a'),
				'hour' => date('g'),
				'sec' => date('s')
			);
			$update['PROPUESTum']['tecnico_id'] = $this->usuario['Persona']['id'];
			if (!$this->PROPUESTum->save($update)){
				throw new Exception("No se ha podido actualizar el estado de la propuesta.");
			}
			$this->redirect(array('action' => 'valorartec', $id));
		}catch(Exception $e){
			$this->Session->setFlash(__($e->getMessage()));
			die($e);
		}
	}
	
	public function valorartec($id = null) {
		//comprobar que sea técnico
		try {
			$this->PROPUESTum->id = $id;
			if (!$this->PROPUESTum->exists()) {
				throw new NotFoundException(__('La propuesta no existe.'));
			}
			
			$propuesta = $this->PROPUESTum->read(null, $id);
			
			if ($this->request->is('post')){
				if (isset($this->request->data['respuesta'])){
					
					$this->COMENTARIO->create();
					$respuesta = array(
						'COMENTARIO' => array(
							'comentario' => $this->request->data['respuesta'],
							'persona_id' => $this->usuario['Persona']['id'],
							'propuesta_id' => $id,
							'fecha' => array(
								'month' => date('m'), 
								'day' => date('d'),
								'year' => date('y'),
								'min' => date('i'),
								'meridian' => date('a'),
								'hour' => date('g'),
								'sec' => date('s')
							)
						)
					);
					
					if (!$this->COMENTARIO->save($respuesta)){
						throw new Exception("No se ha podido almacenar la valoración");
					}
					
					$update = $this->request->data;
					$mes = (date('m')+4) %12;
					$year = floor((date('m')+4) /12);
					
					if ($this->request->data['action'] == 'r'){

						$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_VISTOBUENO;
						$update['PROPUESTum']['fecha_limite'] = array(
							'month' => $mes == 0 ? 12 : $mes, 
							'day' => date('d'),
							'year' => date('y') + $year,
							'min' => date('i'),
							'meridian' => date('a'),
							'hour' => date('g'),
							'sec' => date('s')
						);
						
					}else if ($this->request->data['action'] == 'a'){
						if ($propuesta['PROPUESTum']['estado'] !=self::ESTADO_PENDIENTE_ACEPTACION_TECNICO){
							throw new Exception("Todavía no se puede aceptar esta propuesta.");
						}
						
						$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_VALORACION_CIO;
											
					}else if ($this->request->data['action'] == 'd'){
						$update['PROPUESTum']['estado'] = self::ESTADO_DESCARTADA;
					}
					
					if (!$this->PROPUESTum->save($update)){
						throw new Exception("No se ha podido actualizar el estado de la propuesta.");
					}
					
				}
				
				$propuesta = $this->PROPUESTum->read(null, $id);
			}	
			
			$estado = $propuesta['PROPUESTum']['estado'];
			if ($estado == self::ESTADO_PENDIENTE_VALORACION_TECNICA ||
				$estado == self::ESTADO_PENDIENTE_ACEPTACION_TECNICO){
				
				$puedeContestar = true;	
			} else{
				$puedeContestar = FALSE;
			}
			$mostrarAceptacion = $propuesta['PROPUESTum']['estado'] == self::ESTADO_PENDIENTE_ACEPTACION_TECNICO;
			
			$options = array(
				'order' => array(
					'COMENTARIO.fecha DESC'
				),
				'conditions' => array(
					'COMENTARIO.propuesta_id' => $id
				)
			);
			
			$comentarios = $this->COMENTARIO->find('all', $options);
			$this->set('comentarios', $comentarios);
			$this->set('pROPUESTum', $propuesta);
			$this->set('estado', self::$estados[$propuesta['PROPUESTum']['estado']]);
			$this->set('puedeContestar', $puedeContestar);
			$this->set('mostrarAceptacion', $mostrarAceptacion);
		}catch(Exception $e){
			$this->Session->setFlash(__($e->getMessage()));
			die($e);
		}
	}

	public function revisarprop($id = null) {
		//comprobar que sea técnico
		try {
			$this->PROPUESTum->id = $id;
			if (!$this->PROPUESTum->exists()) {
				throw new NotFoundException(__('La propuesta no existe.'));
			}
			
			$propuesta = $this->PROPUESTum->read(null, $id);

			if ($this->request->is('post') || $this->request->is('put')){
				
				if (isset($this->request->data['respuesta'])){
							
					$this->COMENTARIO->create();
					$respuesta = array(
						'COMENTARIO' => array(
							'comentario' => $this->request->data['respuesta'],
							'persona_id' => $this->usuario['Persona']['id'],
							'propuesta_id' => $id,
							'fecha' => array(
								'month' => date('m'), 
								'day' => date('d'),
								'year' => date('y'),
								'min' => date('i'),
								'meridian' => date('a'),
								'hour' => date('g'),
								'sec' => date('s')
							)
						)
					);
					
					if (!$this->COMENTARIO->save($respuesta)){
						throw new Exception("No se ha podido almacenar la valoración");
					}
					
					$update = $this->request->data;
					$mes = (date('m')+4) %12;
					$year = floor((date('m')+4) /12);
					
					if ($this->request->data['action'] == 'r'){

						$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_VALORACION_TECNICA;
						$update['PROPUESTum']['fecha_limite'] = array(
							'month' => $mes == 0 ? 12 : $mes, 
							'day' => date('d'),
							'year' => date('y') + $year,
							'min' => date('i'),
							'meridian' => date('a'),
							'hour' => date('g'),
							'sec' => date('s')
						);
						
					}else if ($this->request->data['action'] == 'a'){
						
						if ($propuesta['PROPUESTum']['estado'] !=self::ESTADO_PENDIENTE_VISTOBUENO){
							throw new Exception("Todavía no se puede aceptar esta propuesta.");
						}
						
						$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_ACEPTACION_TECNICO;
											
					}else if ($this->request->data['action'] == 'd'){
						$update['PROPUESTum']['estado'] = self::ESTADO_DESCARTADA;
					}
					
					if (!$this->PROPUESTum->save($update)){
						throw new Exception("No se ha podido actualizar el estado de la propuesta.");
					}
					
				}
				
				$propuesta = $this->PROPUESTum->read(null, $id);
			}	
			
			$puedeContestar = $propuesta['PROPUESTum']['estado'] == self::ESTADO_PENDIENTE_VISTOBUENO;
			
			$options = array(
				'order' => array(
					'COMENTARIO.fecha DESC'
				),
				'conditions' => array(
					'COMENTARIO.propuesta_id' => $id
				)
			);
			$this->request->data = $propuesta;
			$solicitantes = $this->PROPUESTum->Solicitante->find('list');
			$carteras = $this->PROPUESTum->Cartera->find('list');
			$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
			$tecnicos = $this->PROPUESTum->Tecnico->find('list');
			$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
			$responsables = $this->PROPUESTum->Responsable->find('list');
			$tipoPros = $this->PROPUESTum->TipoPro->find('list');
			$aREAs = $this->PROPUESTum->AREA->find('list');
			$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
			$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
			$comentarios = $this->COMENTARIO->find('all', $options);
			$this->set('comentarios', $comentarios);
			$this->set('pROPUESTum', $propuesta);
			$this->set('estado', self::$estados[$propuesta['PROPUESTum']['estado']]);
			$this->set('puedeContestar', $puedeContestar);
		}catch(Exception $e){
			$this->Session->setFlash(__($e->getMessage()));
			die($e);
		}
	}

	public function valorarcio($id = null) {
		//comprobar que sea técnico
		try {
			$this->PROPUESTum->id = $id;
			if (!$this->PROPUESTum->exists()) {
				throw new NotFoundException(__('La propuesta no existe.'));
			}
			
			$propuesta = $this->PROPUESTum->read(null, $id);

			if ($this->request->is('post') || $this->request->is('put')){
				
				if (isset($this->request->data['respuesta'])){
							
					$this->COMENTARIO->create();
					$respuesta = array(
						'COMENTARIO' => array(
							'comentario' => $this->request->data['respuesta'],
							'persona_id' => $this->usuario['Persona']['id'],
							'propuesta_id' => $id,
							'fecha' => array(
								'month' => date('m'), 
								'day' => date('d'),
								'year' => date('y'),
								'min' => date('i'),
								'meridian' => date('a'),
								'hour' => date('g'),
								'sec' => date('s')
							)
						)
					);
					
					if (!$this->COMENTARIO->save($respuesta)){
						throw new Exception("No se ha podido almacenar la valoración");
					}
					
					$update = $this->request->data;
					$mes = (date('m')+4) %12;
					$year = floor((date('m')+4) /12);
					
					if ($this->request->data['action'] == 'r'){

						$update['PROPUESTum']['fecha_limite'] = array(
							'month' => $mes == 0 ? 12 : $mes, 
							'day' => date('d'),
							'year' => date('y') + $year,
							'min' => date('i'),
							'meridian' => date('a'),
							'hour' => date('g'),
							'sec' => date('s')
						);
						
						$update['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_VALORACION_CIO;

					}else if ($this->request->data['action'] == 'a'){
						
						if ($propuesta['PROPUESTum']['estado'] !=self::ESTADO_PENDIENTE_VALORACION_CIO){
							throw new Exception("Todavía no se puede aceptar esta propuesta.");
						}
						
						$update['PROPUESTum']['estado'] = self::ESTADO_ACEPTADA;
											
					}else if ($this->request->data['action'] == 'd'){
						$update['PROPUESTum']['estado'] = self::ESTADO_DESCARTADA;
					}
					
					if (!$this->PROPUESTum->save($update)){
						print_r($update);
						print_r($this->PROPUESTum->invalidFields());die();
						throw new Exception("No se ha podido actualizar el estado de la propuesta.");
					}
					
				}
				
				$propuesta = $this->PROPUESTum->read(null, $id);
			}	
			
			$puedeContestar = $propuesta['PROPUESTum']['estado'] == self::ESTADO_PENDIENTE_VALORACION_CIO;
			
			$options = array(
				'order' => array(
					'COMENTARIO.fecha DESC'
				),
				'conditions' => array(
					'COMENTARIO.propuesta_id' => $id
				)
			);
			$this->request->data = $propuesta;
			$solicitantes = $this->PROPUESTum->Solicitante->find('list');
			$carteras = $this->PROPUESTum->Cartera->find('list');
			$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
			$tecnicos = $this->PROPUESTum->Tecnico->find('list');
			$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
			$responsables = $this->PROPUESTum->Responsable->find('list');
			$tipoPros = $this->PROPUESTum->TipoPro->find('list');
			$aREAs = $this->PROPUESTum->AREA->find('list');
			$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
			$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
			$comentarios = $this->COMENTARIO->find('all', $options);
			$this->set('comentarios', $comentarios);
			$this->set('pROPUESTum', $propuesta);
			$this->set('estado', self::$estados[$propuesta['PROPUESTum']['estado']]);
			$this->set('puedeContestar', $puedeContestar);
		}catch(Exception $e){
			$this->Session->setFlash(__($e->getMessage()));
			die($e);
		}
	}

/**
 * add method
 *+
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PROPUESTum->create();
			if ($this->PROPUESTum->save($this->request->data)) {
				print_r($this->request->data);die();
				$this->Session->setFlash(__('The p r o p u e s tum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o p u e s tum could not be saved. Please, try again.'));
			}
		}
		
		$solicitantes = $this->PROPUESTum->Solicitante->find('list');
		$carteras = $this->PROPUESTum->Cartera->find('list');
		$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
		$tecnicos = $this->PROPUESTum->Tecnico->find('list');
		$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
		$responsables = $this->PROPUESTum->Responsable->find('list');
		$tipoPros = $this->PROPUESTum->TipoPro->find('list');
		$aREAs = $this->PROPUESTum->AREA->find('list');
		$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
		$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
	}

	public function crear() {
		if ($this->request->is('post')) {
			$this->PROPUESTum->create();
			$this->request->data['PROPUESTum']['estado'] = self::ESTADO_PENDIENTE_ASIGNAR;
			$this->request->data['PROPUESTum']['fecha_creacion'] = array(
				'month' => date('m'), 
				'day' => date('d'),
				'year' => date('y'),
				'min' => date('i'),
				'meridian' => date('a'),
				'hour' => date('g'),
				'sec' => date('s')
			);
			$this->request->data['PROPUESTum']['solicitante_id'] = $this->usuario['Persona']['id'];
			if ($this->PROPUESTum->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o p u e s tum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o p u e s tum could not be saved. Please, try again.'));
			}
		}
		
		$solicitantes = $this->PROPUESTum->Solicitante->find('list');
		$carteras = $this->PROPUESTum->Cartera->find('list');
		$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
		$tecnicos = $this->PROPUESTum->Tecnico->find('list');
		$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
		$responsables = $this->PROPUESTum->Responsable->find('list');
		$tipoPros = $this->PROPUESTum->TipoPro->find('list');
		$aREAs = $this->PROPUESTum->AREA->find('list');
		$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
		$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PROPUESTum->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o p u e s tum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o p u e s tum could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PROPUESTum->read(null, $id);
		}
		$solicitantes = $this->PROPUESTum->Solicitante->find('list');
		$carteras = $this->PROPUESTum->Cartera->find('list');
		$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
		$tecnicos = $this->PROPUESTum->Tecnico->find('list');
		$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
		$responsables = $this->PROPUESTum->Responsable->find('list');
		$tipoPros = $this->PROPUESTum->TipoPro->find('list');
		$aREAs = $this->PROPUESTum->AREA->find('list');
		$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
		$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
	}



/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		if ($this->PROPUESTum->delete()) {
			$this->Session->setFlash(__('P r o p u e s tum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r o p u e s tum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PROPUESTum->recursive = 0;
		$this->set('PROPUESTum', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		$this->set('PROPUESTum', $this->PROPUESTum->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PROPUESTum->create();
			if ($this->PROPUESTum->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o p u e s tum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o p u e s tum could not be saved. Please, try again.'));
			}
		}
		$solicitantes = $this->PROPUESTum->Solicitante->find('list');
		$carteras = $this->PROPUESTum->Cartera->find('list');
		$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
		$tecnicos = $this->PROPUESTum->Tecnico->find('list');
		$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
		$responsables = $this->PROPUESTum->Responsable->find('list');
		$tipoPros = $this->PROPUESTum->TipoPro->find('list');
		$aREAs = $this->PROPUESTum->AREA->find('list');
		$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
		$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PROPUESTum->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o p u e s tum has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o p u e s tum could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PROPUESTum->read(null, $id);
		}
		$solicitantes = $this->PROPUESTum->Solicitante->find('list');
		$carteras = $this->PROPUESTum->Cartera->find('list');
		$valoracionCios = $this->PROPUESTum->ValoracionCio->find('list');
		$tecnicos = $this->PROPUESTum->Tecnico->find('list');
		$patrocinadors = $this->PROPUESTum->Patrocinador->find('list');
		$responsables = $this->PROPUESTum->Responsable->find('list');
		$tipoPros = $this->PROPUESTum->TipoPro->find('list');
		$aREAs = $this->PROPUESTum->AREA->find('list');
		$oBJETIVOs = $this->PROPUESTum->OBJETIVO->find('list');
		$this->set(compact('solicitantes', 'carteras', 'valoracionCios', 'tecnicos', 'patrocinadors', 'responsables', 'tipoPros', 'aREAs', 'oBJETIVOs'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PROPUESTum->id = $id;
		if (!$this->PROPUESTum->exists()) {
			throw new NotFoundException(__('Invalid p r o p u e s tum'));
		}
		if ($this->PROPUESTum->delete()) {
			$this->Session->setFlash(__('P r o p u e s tum deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r o p u e s tum was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
