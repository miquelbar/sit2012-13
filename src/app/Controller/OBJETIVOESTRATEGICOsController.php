<?php
App::uses('AppController', 'Controller');
/**
 * OBJETIVOESTRATEGICOs Controller
 *
 * @property OBJETIVOESTRATEGICO $OBJETIVOESTRATEGICO
 */
class OBJETIVOESTRATEGICOsController extends AppController {
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'OBJETIVOESTRATEGICO.id' => 'DESC'
        )
    );


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->OBJETIVOESTRATEGICO->recursive = 0;
		$this->set('oBJETIVOESTRATEGICOs', $this->paginate());
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
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		$this->set('oBJETIVOESTRATEGICO', $this->OBJETIVOESTRATEGICO->read(null, $id));
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
			$this->OBJETIVOESTRATEGICO->create();
			if ($this->OBJETIVOESTRATEGICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o could not be saved. Please, try again.'));
			}
		}
		$principioTics = $this->OBJETIVOESTRATEGICO->PrincipioTic->find('list');
		$this->set(compact('principioTics'));
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
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OBJETIVOESTRATEGICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OBJETIVOESTRATEGICO->read(null, $id);
		}
		$principioTics = $this->OBJETIVOESTRATEGICO->PrincipioTic->find('list');
		$this->set(compact('principioTics'));
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
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		if ($this->OBJETIVOESTRATEGICO->delete()) {
			$this->Session->setFlash(__('O b j e t i v o e s t r a t e g i c o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O b j e t i v o e s t r a t e g i c o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OBJETIVOESTRATEGICO->recursive = 0;
		$this->set('oBJETIVOESTRATEGICOs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		$this->set('oBJETIVOESTRATEGICO', $this->OBJETIVOESTRATEGICO->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OBJETIVOESTRATEGICO->create();
			if ($this->OBJETIVOESTRATEGICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o could not be saved. Please, try again.'));
			}
		}
		$principioTics = $this->OBJETIVOESTRATEGICO->PrincipioTic->find('list');
		$this->set(compact('principioTics'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OBJETIVOESTRATEGICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o e s t r a t e g i c o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OBJETIVOESTRATEGICO->read(null, $id);
		}
		$principioTics = $this->OBJETIVOESTRATEGICO->PrincipioTic->find('list');
		$this->set(compact('principioTics'));
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
		$this->OBJETIVOESTRATEGICO->id = $id;
		if (!$this->OBJETIVOESTRATEGICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o e s t r a t e g i c o'));
		}
		if ($this->OBJETIVOESTRATEGICO->delete()) {
			$this->Session->setFlash(__('O b j e t i v o e s t r a t e g i c o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O b j e t i v o e s t r a t e g i c o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
