<?php
App::uses('AppController', 'Controller');
/**
 * SERVICIOs Controller
 *
 * @property SERVICIO $SERVICIO
 */
class SERVICIOsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
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
		$this->SERVICIO->id = $id;
		if (!$this->SERVICIO->exists()) {
			throw new NotFoundException(__('Invalid s e r v i c i o'));
		}
		$this->set('sERVICIO', $this->SERVICIO->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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
