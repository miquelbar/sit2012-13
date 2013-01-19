<?php
App::uses('AppController', 'Controller');
/**
 * OBJETIVOTACTICOs Controller
 *
 * @property OBJETIVOTACTICO $OBJETIVOTACTICO
 */
class OBJETIVOTACTICOsController extends AppController {
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'OBJETIVOTACTICO.id' => 'DESC'
        )
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->OBJETIVOTACTICO->recursive = 0;
		$this->set('oBJETIVOTACTICOs', $this->paginate());
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
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		$this->set('oBJETIVOTACTICO', $this->OBJETIVOTACTICO->read(null, $id));
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
			$this->OBJETIVOTACTICO->create();
			if ($this->OBJETIVOTACTICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o could not be saved. Please, try again.'));
			}
		}
		$objetivoEstrategicos = $this->OBJETIVOTACTICO->ObjetivoEstrategico->find('list');
		$this->set(compact('objetivoEstrategicos'));
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
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OBJETIVOTACTICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OBJETIVOTACTICO->read(null, $id);
		}
		$objetivoEstrategicos = $this->OBJETIVOTACTICO->ObjetivoEstrategico->find('list');
		$this->set(compact('objetivoEstrategicos'));
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
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		if ($this->OBJETIVOTACTICO->delete()) {
			$this->Session->setFlash(__('O b j e t i v o t a c t i c o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O b j e t i v o t a c t i c o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OBJETIVOTACTICO->recursive = 0;
		$this->set('oBJETIVOTACTICOs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		$this->set('oBJETIVOTACTICO', $this->OBJETIVOTACTICO->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OBJETIVOTACTICO->create();
			if ($this->OBJETIVOTACTICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o could not be saved. Please, try again.'));
			}
		}
		$objetivoEstrategicos = $this->OBJETIVOTACTICO->ObjetivoEstrategico->find('list');
		$this->set(compact('objetivoEstrategicos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OBJETIVOTACTICO->save($this->request->data)) {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The o b j e t i v o t a c t i c o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OBJETIVOTACTICO->read(null, $id);
		}
		$objetivoEstrategicos = $this->OBJETIVOTACTICO->ObjetivoEstrategico->find('list');
		$this->set(compact('objetivoEstrategicos'));
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
		$this->OBJETIVOTACTICO->id = $id;
		if (!$this->OBJETIVOTACTICO->exists()) {
			throw new NotFoundException(__('Invalid o b j e t i v o t a c t i c o'));
		}
		if ($this->OBJETIVOTACTICO->delete()) {
			$this->Session->setFlash(__('O b j e t i v o t a c t i c o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O b j e t i v o t a c t i c o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
