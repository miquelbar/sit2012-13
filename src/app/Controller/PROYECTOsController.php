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
 * PROYECTOs Controller
 *
 * @property PROYECTO $PROYECTO
 */
class PROYECTOsController extends AppController {

	public $uses = array('PROYECTO','ESTADOPROYECTO', 
						'AREAPROYECTO', 'AREAFUNCIONAL',
						'OBJETIVOTACTICO','OBJETIVOPROYECTO','METRICA', 'VALORMETRICA');
						
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'PROYECTO.id' => 'DESC'
        )
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->PROYECTO->recursive = 0;
		$this->set('pROYECTOs', $this->paginate());
		$showGfx = true;
		if ($showGfx){
			$modelChart = new ModelPieChart($this->PROYECTO, 'pr');
			$modelChart->setTitle('Estado de los proyectos:');
			$estados = $this->ESTADOPROYECTO->obtenerEstados();
			$modelChart->setFieldDict($estados);
			$modelChart->buildForFieldGrouped('estado_proyecto_id', 'id');
			$this->set('load_gfx', GoogleChart::loadLibrary());
			$this->set('script_gfx_estado', $modelChart->renderChart());
			$this->set('container_gfx_estado', $modelChart->renderContainer());
			
			$modelChart = new ModelPieChart($this->AREAPROYECTO, 'porarea');
			$modelChart->setTitle('Distribución de proyectos por área funcional:');
			$areas = $this->AREAFUNCIONAL->obtenerAreas();
			$modelChart->setFieldDict($areas);
			$modelChart->buildForFieldGrouped('area_funcional_id', 'id');
			$this->set('script_gfx_area', $modelChart->renderChart());
			$this->set('container_gfx_area', $modelChart->renderContainer());
			
			$modelChart = new ModelPieChart($this->OBJETIVOPROYECTO, 'porarea');
			$modelChart->setTitle('Ditribución de proyectos por objetivos:');
			$objetivos = $this->OBJETIVOTACTICO->obtenerObjetivos();
			$modelChart->setFieldDict($objetivos);
			$modelChart->buildForFieldGrouped('objetivo_tactico_id', 'id');
			$this->set('script_gfx_objetivos', $modelChart->renderChart());
			$this->set('container_gfx_objetivos', $modelChart->renderContainer());
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		
		$proyecto = $this->PROYECTO->read(null, $id);
		$metricas = $this->METRICA->find('all', array(
			'conditions' => array('para_proyecto' => 1),
			'recursive' => 0,
		));
		
		$metricas = MetricaAsociar::asociar($proyecto['ValorMetrica'], $metricas);
		$this->set('metricas', $metricas);
		
				//$chart = new GooglePieChart('tst');
		$buildGFX = array(
			array('id'=>2, 'type'=> 'h', 'titulo' => $metricas[2]['titulo']),
			array('id'=>4, 'type'=> 'r', 'titulo' => $metricas[4]['titulo']),
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
				'proyecto_id' => $id,
				'metrica_id' => $value['id']
			));
		
			array_push($gfx, array(
				'script' => $modelChart->renderChart(),
				'container' => $modelChart->renderContainer()
			));
			
		}
		
		$this->set('load_gfx', GoogleChart::loadLibrary());
		$this->set('gfx', $gfx);
		
		$this->set('pROYECTO', $this->PROYECTO->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PROYECTO->create();
			if ($this->PROYECTO->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o y e c t o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no se ha podido guardar.'));
			}
		}
		
		if (isset($this->params['url']['pr'])){
			$this->set('propuesta',$this->params['url']['pr']);
		}
		
		$carteras = $this->PROYECTO->Cartera->find('list');
		$propuestas = $this->PROYECTO->Propuesta->find('list');
		$tipoPros = $this->PROYECTO->TipoPro->find('list');
		$estadoProyectos = $this->PROYECTO->EstadoProyecto->find('list');
		$patrocinadors = $this->PROYECTO->Patrocinador->find('list');
		$responsables = $this->PROYECTO->Responsable->find('list');
		$eSTADOs = $this->PROYECTO->ESTADO->find('list');
		$aREAs = $this->PROYECTO->AREA->find('list');
		$oBJETIVOs = $this->PROYECTO->OBJETIVO->find('list');
		$sERVICIOs = $this->PROYECTO->SERVICIO->find('list');
		$this->set(compact('carteras', 'propuestas', 'tipoPros', 'estadoProyectos', 'patrocinadors', 'responsables', 'eSTADOs', 'aREAs', 'oBJETIVOs', 'sERVICIOs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PROYECTO->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o y e c t o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o y e c t o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PROYECTO->read(null, $id);
		}
		$carteras = $this->PROYECTO->Cartera->find('list');
		$propuestas = $this->PROYECTO->Propuesta->find('list');
		$tipoPros = $this->PROYECTO->TipoPro->find('list');
		$estadoProyectos = $this->PROYECTO->EstadoProyecto->find('list');
		$patrocinadors = $this->PROYECTO->Patrocinador->find('list');
		$responsables = $this->PROYECTO->Responsable->find('list');
		$eSTADOs = $this->PROYECTO->ESTADO->find('list');
		$aREAs = $this->PROYECTO->AREA->find('list');
		$oBJETIVOs = $this->PROYECTO->OBJETIVO->find('list');
		$sERVICIOs = $this->PROYECTO->SERVICIO->find('list');
		$this->set(compact('carteras', 'propuestas', 'tipoPros', 'estadoProyectos', 'patrocinadors', 'responsables', 'eSTADOs', 'aREAs', 'oBJETIVOs', 'sERVICIOs'));
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
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		if ($this->PROYECTO->delete()) {
			$this->Session->setFlash(__('P r o y e c t o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r o y e c t o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PROYECTO->recursive = 0;
		$this->set('pROYECTOs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		$this->set('pROYECTO', $this->PROYECTO->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PROYECTO->create();
			if ($this->PROYECTO->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o y e c t o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o y e c t o could not be saved. Please, try again.'));
			}
		}
		$carteras = $this->PROYECTO->Cartera->find('list');
		$propuestas = $this->PROYECTO->Propuesta->find('list');
		$tipoPros = $this->PROYECTO->TipoPro->find('list');
		$estadoProyectos = $this->PROYECTO->EstadoProyecto->find('list');
		$patrocinadors = $this->PROYECTO->Patrocinador->find('list');
		$responsables = $this->PROYECTO->Responsable->find('list');
		$eSTADOs = $this->PROYECTO->ESTADO->find('list');
		$aREAs = $this->PROYECTO->AREA->find('list');
		$oBJETIVOs = $this->PROYECTO->OBJETIVO->find('list');
		$sERVICIOs = $this->PROYECTO->SERVICIO->find('list');
		$this->set(compact('carteras', 'propuestas', 'tipoPros', 'estadoProyectos', 'patrocinadors', 'responsables', 'eSTADOs', 'aREAs', 'oBJETIVOs', 'sERVICIOs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PROYECTO->save($this->request->data)) {
				$this->Session->setFlash(__('The p r o y e c t o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r o y e c t o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PROYECTO->read(null, $id);
		}
		$carteras = $this->PROYECTO->Cartera->find('list');
		$propuestas = $this->PROYECTO->Propuesta->find('list');
		$tipoPros = $this->PROYECTO->TipoPro->find('list');
		$estadoProyectos = $this->PROYECTO->EstadoProyecto->find('list');
		$patrocinadors = $this->PROYECTO->Patrocinador->find('list');
		$responsables = $this->PROYECTO->Responsable->find('list');
		$eSTADOs = $this->PROYECTO->ESTADO->find('list');
		$aREAs = $this->PROYECTO->AREA->find('list');
		$oBJETIVOs = $this->PROYECTO->OBJETIVO->find('list');
		$sERVICIOs = $this->PROYECTO->SERVICIO->find('list');
		$this->set(compact('carteras', 'propuestas', 'tipoPros', 'estadoProyectos', 'patrocinadors', 'responsables', 'eSTADOs', 'aREAs', 'oBJETIVOs', 'sERVICIOs'));
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
		$this->PROYECTO->id = $id;
		if (!$this->PROYECTO->exists()) {
			throw new NotFoundException(__('Invalid p r o y e c t o'));
		}
		if ($this->PROYECTO->delete()) {
			$this->Session->setFlash(__('P r o y e c t o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r o y e c t o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
