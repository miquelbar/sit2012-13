<?php
App::uses('AppController', 'Controller');
/**
 * CARTERAs Controller
 *
 * @property CARTERA $CARTERA
 */
class CARTERAsController extends AppController {
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'CARTERA.id' => 'DESC'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->CARTERA->recursive = 0;
		$this->set('cARTERAs', $this->paginate());
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
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		$this->set('cARTERA', $this->CARTERA->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->CARTERA->create();
			if ($this->CARTERA->save($this->request->data)) {
				$this->Session->setFlash(__('The c a r t e r a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The c a r t e r a could not be saved. Please, try again.'));
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
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CARTERA->save($this->request->data)) {
				$this->Session->setFlash(__('The c a r t e r a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The c a r t e r a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CARTERA->read(null, $id);
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
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		if ($this->CARTERA->delete()) {
			$this->Session->setFlash(__('C a r t e r a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('C a r t e r a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CARTERA->recursive = 0;
		$this->set('cARTERAs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		$this->set('cARTERA', $this->CARTERA->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CARTERA->create();
			if ($this->CARTERA->save($this->request->data)) {
				$this->Session->setFlash(__('The c a r t e r a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The c a r t e r a could not be saved. Please, try again.'));
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
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CARTERA->save($this->request->data)) {
				$this->Session->setFlash(__('The c a r t e r a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The c a r t e r a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CARTERA->read(null, $id);
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
		$this->CARTERA->id = $id;
		if (!$this->CARTERA->exists()) {
			throw new NotFoundException(__('Invalid c a r t e r a'));
		}
		if ($this->CARTERA->delete()) {
			$this->Session->setFlash(__('C a r t e r a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('C a r t e r a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
