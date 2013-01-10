<?php
App::uses('AppController', 'Controller');
/**
 * PROYECTOs Controller
 *
 * @property PROYECTO $PROYECTO
 */
class PROYECTOsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PROYECTO->recursive = 0;
		$this->set('pROYECTOs', $this->paginate());
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
		$propuestas = $this->PROYECTO->Propuestum->find('list');
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
		$propuestas = $this->PROYECTO->Propuestum->find('list');
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
		$propuestas = $this->PROYECTO->Propuestum->find('list');
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
