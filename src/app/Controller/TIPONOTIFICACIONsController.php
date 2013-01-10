<?php
App::uses('AppController', 'Controller');
/**
 * TIPONOTIFICACIONs Controller
 *
 * @property TIPONOTIFICACION $TIPONOTIFICACION
 */
class TIPONOTIFICACIONsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TIPONOTIFICACION->recursive = 0;
		$this->set('tIPONOTIFICACIONs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		$this->set('tIPONOTIFICACION', $this->TIPONOTIFICACION->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TIPONOTIFICACION->create();
			if ($this->TIPONOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n could not be saved. Please, try again.'));
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
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TIPONOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TIPONOTIFICACION->read(null, $id);
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
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		if ($this->TIPONOTIFICACION->delete()) {
			$this->Session->setFlash(__('T i p o n o t i f i c a c i o n deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('T i p o n o t i f i c a c i o n was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TIPONOTIFICACION->recursive = 0;
		$this->set('tIPONOTIFICACIONs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		$this->set('tIPONOTIFICACION', $this->TIPONOTIFICACION->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TIPONOTIFICACION->create();
			if ($this->TIPONOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n could not be saved. Please, try again.'));
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
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TIPONOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The t i p o n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TIPONOTIFICACION->read(null, $id);
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
		$this->TIPONOTIFICACION->id = $id;
		if (!$this->TIPONOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid t i p o n o t i f i c a c i o n'));
		}
		if ($this->TIPONOTIFICACION->delete()) {
			$this->Session->setFlash(__('T i p o n o t i f i c a c i o n deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('T i p o n o t i f i c a c i o n was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
