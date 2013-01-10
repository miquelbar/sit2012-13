<?php
App::uses('AppController', 'Controller');
/**
 * PROPUESTum Controller
 *
 * @property PROPUESTum $PROPUESTum
 */
class PROPUESTaController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PROPUESTum->recursive = 0;
		$this->set('pROPUESTa', $this->paginate());
	}

/**
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
		$this->set('pROPUESTum', $this->PROPUESTum->read(null, $id));
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
