<?php
App::uses('AppController', 'Controller');
/**
 * PRINCIPIOTICs Controller
 *
 * @property PRINCIPIOTIC $PRINCIPIOTIC
 */
class PRINCIPIOTICsController extends AppController {
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'PRINCIPIOTIC.id' => 'DESC'
        )
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		//ESTABLECER SI PUEDE EDITAR
		$this->set('puedeEditar',in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));

		$this->PRINCIPIOTIC->recursive = 0;
		$this->set('pRINCIPIOTICs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('puedeEditar',in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		$this->set('pRINCIPIOTIC', $this->PRINCIPIOTIC->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->PRINCIPIOTIC->create();
			if ($this->PRINCIPIOTIC->save($this->request->data)) {
				$this->Session->setFlash(__('The p r i n c i p i o t i c has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r i n c i p i o t i c could not be saved. Please, try again.'));
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
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PRINCIPIOTIC->save($this->request->data)) {
				$this->Session->setFlash(__('The p r i n c i p i o t i c has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r i n c i p i o t i c could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PRINCIPIOTIC->read(null, $id);
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
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		if ($this->PRINCIPIOTIC->delete()) {
			$this->Session->setFlash(__('P r i n c i p i o t i c deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r i n c i p i o t i c was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PRINCIPIOTIC->recursive = 0;
		$this->set('pRINCIPIOTICs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		$this->set('pRINCIPIOTIC', $this->PRINCIPIOTIC->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PRINCIPIOTIC->create();
			if ($this->PRINCIPIOTIC->save($this->request->data)) {
				$this->Session->setFlash(__('The p r i n c i p i o t i c has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r i n c i p i o t i c could not be saved. Please, try again.'));
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
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PRINCIPIOTIC->save($this->request->data)) {
				$this->Session->setFlash(__('The p r i n c i p i o t i c has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The p r i n c i p i o t i c could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PRINCIPIOTIC->read(null, $id);
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
		$this->PRINCIPIOTIC->id = $id;
		if (!$this->PRINCIPIOTIC->exists()) {
			throw new NotFoundException(__('Invalid p r i n c i p i o t i c'));
		}
		if ($this->PRINCIPIOTIC->delete()) {
			$this->Session->setFlash(__('P r i n c i p i o t i c deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('P r i n c i p i o t i c was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
