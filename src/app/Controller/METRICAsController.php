<?php
App::uses('AppController', 'Controller');
/**
 * METRICAs Controller
 *
 * @property METRICA $METRICA
 */
class METRICAsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->METRICA->recursive = 0;
		$this->set('mETRICAs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		$this->set('mETRICA', $this->METRICA->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->METRICA->create();
			if ($this->METRICA->save($this->request->data)) {
				$this->Session->setFlash(__('The m e t r i c a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The m e t r i c a could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->METRICA->save($this->request->data)) {
				$this->Session->setFlash(__('The m e t r i c a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The m e t r i c a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->METRICA->read(null, $id);
		}
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
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		if ($this->METRICA->delete()) {
			$this->Session->setFlash(__('M e t r i c a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('M e t r i c a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->METRICA->recursive = 0;
		$this->set('mETRICAs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		$this->set('mETRICA', $this->METRICA->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->METRICA->create();
			if ($this->METRICA->save($this->request->data)) {
				$this->Session->setFlash(__('The m e t r i c a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The m e t r i c a could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->METRICA->save($this->request->data)) {
				$this->Session->setFlash(__('The m e t r i c a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The m e t r i c a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->METRICA->read(null, $id);
		}
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
		$this->METRICA->id = $id;
		if (!$this->METRICA->exists()) {
			throw new NotFoundException(__('Invalid m e t r i c a'));
		}
		if ($this->METRICA->delete()) {
			$this->Session->setFlash(__('M e t r i c a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('M e t r i c a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
