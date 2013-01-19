<?php
App::uses('AppController', 'Controller');
App::uses('MetricaAsociar', '');
App::uses('GoogleChart', '');
App::uses('GooglePieChart', '');
App::uses('GoogleHistograma', '');
App::uses('ModelChart', '');
App::uses('ModelPieChart', '');
App::uses('ModelHistogramChart', '');
App::uses('MetricaAsociar', '');
/**
 * SERVICIOs Controller
 *
 * @property SERVICIO $SERVICIO
 */
class SERVICIOsController extends AppController {

	public $uses = array('SERVICIO','METRICA', 'VALORMETRICA');
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'SERVICIO.id' => 'DESC'
        )
    );	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->SERVICIO->recursive = 0;
		$this->set('sERVICIOs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		
		$servicio = $this->SERVICIO->read(null, $id);
		$metricas = $this->METRICA->find('all', array(
			'conditions' => array('para_servicio' => 1),
			'recursive' => 0,
		));
		
		$metricas = MetricaAsociar::asociar($servicio['ValorMetrica'], $metricas);
		$this->set('metricas', $metricas);
		$this->set('sERVICIO', $this->SERVICIO->read(null, $id));
		
		//$chart = new GooglePieChart('tst');
		$buildGFX = array(
			array('id'=>2, 'type'=> 'h', 'titulo' => $metricas[2]['titulo']),
			array('id'=>3, 'type'=> 'h', 'titulo' => $metricas[3]['titulo']),
			array('id'=>5, 'type'=> 'h', 'titulo' => $metricas[5]['titulo'])
		);
		
		$gfx = array();
		foreach ($buildGFX as $key => $value) {
			if ($value['type']=='h'){
				$modelChart = new ModelHistogramChart($this->VALORMETRICA, $value['id']);
			} else {
				$modelChart = new ModelPieChart($this->VALORMETRICA, $value['id']);
			}
			$modelChart->setTitle($value['titulo']);
			$modelChart->buildForFieldGrouped('valor','fecha', array(
				'servicio_id' => $id,
				'metrica_id' => $value['id']
			));
		
			array_push($gfx, array(
				'script' => $modelChart->renderChart(),
				'container' => $modelChart->renderContainer()
			));
			
		}
		
		$this->set('load_gfx', GoogleChart::loadLibrary());
		$this->set('gfx', $gfx);

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if ($this->request->is('post')) {
			$this->SERVICIO->create();
			if ($this->SERVICIO->save($this->request->data)) {
				$this->Session->setFlash(__('The s e r v i c i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The s e r v i c i o could not be saved. Please, try again.'));
			}
		}
		
		$responsables = $this->SERVICIO->Responsable->find('list');
		$aREAFUNCIONALs = $this->SERVICIO->AREAFUNCIONAL->find('list');
		$pROYECTOs = $this->SERVICIO->PROYECTO->find('list');
		$this->set(compact('responsables', 'aREAFUNCIONALs', 'pROYECTOs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->SERVICIO->id = $id;
		$servicio = $this->SERVICIO->read(null, $id);
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SERVICIO->save($this->request->data)) {
				$this->Session->setFlash(__('The s e r v i c i o has been saved'));
				$this->redirect(array('action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('The s e r v i c i o could not be saved. Please, try again.'));
			}
			$this->VALORMETRICA->procesarMetrica(
				$this->request->data,
				$servicio['SERVICIO']['id'],
				'servicio_id'
			);
		} else {
			$this->request->data = $this->SERVICIO->read(null, $id);
		}
		
		//METRICAS
		
		$metricas = $this->METRICA->find('all', array(
			'conditions' => array('para_servicio' => 1),
			'recursive' => 0
		));
		
		$metricas = MetricaAsociar::asociar($servicio['ValorMetrica'], $metricas);
		$this->set('metricas', $metricas);
		
		$responsables = $this->SERVICIO->Responsable->find('list');
		$aREAFUNCIONALs = $this->SERVICIO->AREAFUNCIONAL->find('list');
		$pROYECTOs = $this->SERVICIO->PROYECTO->find('list');
		$this->set(compact('responsables', 'aREAFUNCIONALs', 'pROYECTOs'));
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
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		if ($this->SERVICIO->delete()) {
			$this->Session->setFlash(__('S e r v i c i o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('S e r v i c i o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SERVICIO->recursive = 0;
		$this->set('sERVICIOs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		$this->set('sERVICIO', $this->SERVICIO->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SERVICIO->create();
			if ($this->SERVICIO->save($this->request->data)) {
				$this->Session->setFlash(__('The s e r v i c i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The s e r v i c i o could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->SERVICIO->Responsable->find('list');
		$aREAFUNCIONALs = $this->SERVICIO->AREAFUNCIONAL->find('list');
		$pROYECTOs = $this->SERVICIO->PROYECTO->find('list');
		$this->set(compact('responsables', 'aREAFUNCIONALs', 'pROYECTOs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SERVICIO->save($this->request->data)) {
				$this->Session->setFlash(__('The s e r v i c i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The s e r v i c i o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SERVICIO->read(null, $id);
		}
		$responsables = $this->SERVICIO->Responsable->find('list');
		$aREAFUNCIONALs = $this->SERVICIO->AREAFUNCIONAL->find('list');
		$pROYECTOs = $this->SERVICIO->PROYECTO->find('list');
		$this->set(compact('responsables', 'aREAFUNCIONALs', 'pROYECTOs'));
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
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		if ($this->SERVICIO->delete()) {
			$this->Session->setFlash(__('S e r v i c i o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('S e r v i c i o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
