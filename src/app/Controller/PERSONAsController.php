<?php
App::uses('AppController', 'Controller');
/**
 * PERSONAs Controller
 *
 * @property PERSONA $PERSONA
 */
class PERSONAsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PERSONA->recursive = 0;
		$this->set('pERSONAs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		$this->set('pERSONA', $this->PERSONA->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PERSONA->create();
			if ($this->PERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p e r s o n a could not be saved. Please, try again.'));
			}
		}
		$aREAs = $this->PERSONA->AREA->find('list');
		$this->set(compact('aREAs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p e r s o n a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PERSONA->read(null, $id);
		}
		$aREAs = $this->PERSONA->AREA->find('list');
		$this->set(compact('aREAs'));
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
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		if ($this->PERSONA->delete()) {
			$this->Session->setFlash(__('P e r s o n a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P e r s o n a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PERSONA->recursive = 0;
		$this->set('pERSONAs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		$this->set('pERSONA', $this->PERSONA->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PERSONA->create();
			if ($this->PERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p e r s o n a could not be saved. Please, try again.'));
			}
		}
		$aREAs = $this->PERSONA->AREA->find('list');
		$this->set(compact('aREAs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p e r s o n a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PERSONA->read(null, $id);
		}
		$aREAs = $this->PERSONA->AREA->find('list');
		$this->set(compact('aREAs'));
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
		$this->PERSONA->id = $id;
		if (!$this->PERSONA->exists()) {
			throw new NotFoundException(__('Invalid p e r s o n a'));
		}
		if ($this->PERSONA->delete()) {
			$this->Session->setFlash(__('P e r s o n a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P e r s o n a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
