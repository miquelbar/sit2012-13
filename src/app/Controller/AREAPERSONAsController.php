<?php
App::uses('AppController', 'Controller');
/**
 * AREAPERSONAs Controller
 *
 * @property AREAPERSONA $AREAPERSONA
 */
class AREAPERSONAsController extends AppController {
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'AREAPERSONA.id' => 'DESC'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		$this->AREAPERSONA->recursive = 0;
		$this->set('aREAPERSONAs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		$this->set('aREAPERSONA', $this->AREAPERSONA->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->AREAPERSONA->create();
			if ($this->AREAPERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a p e r s o n a could not be saved. Please, try again.'));
			}
		}
		$areaFuncionals = $this->AREAPERSONA->AreaFuncional->find('list');
		$personas = $this->AREAPERSONA->Persona->find('list');
		$this->set(compact('areaFuncionals', 'personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AREAPERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a p e r s o n a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AREAPERSONA->read(null, $id);
		}
		$areaFuncionals = $this->AREAPERSONA->AreaFuncional->find('list');
		$personas = $this->AREAPERSONA->Persona->find('list');
		$this->set(compact('areaFuncionals', 'personas'));
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
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		if ($this->AREAPERSONA->delete()) {
			$this->Session->setFlash(__('A r e a p e r s o n a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A r e a p e r s o n a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AREAPERSONA->recursive = 0;
		$this->set('aREAPERSONAs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		$this->set('aREAPERSONA', $this->AREAPERSONA->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AREAPERSONA->create();
			if ($this->AREAPERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a p e r s o n a could not be saved. Please, try again.'));
			}
		}
		$areaFuncionals = $this->AREAPERSONA->AreaFuncional->find('list');
		$personas = $this->AREAPERSONA->Persona->find('list');
		$this->set(compact('areaFuncionals', 'personas'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AREAPERSONA->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a p e r s o n a has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a p e r s o n a could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AREAPERSONA->read(null, $id);
		}
		$areaFuncionals = $this->AREAPERSONA->AreaFuncional->find('list');
		$personas = $this->AREAPERSONA->Persona->find('list');
		$this->set(compact('areaFuncionals', 'personas'));
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
		$this->AREAPERSONA->id = $id;
		if (!$this->AREAPERSONA->exists()) {
			throw new NotFoundException(__('Invalid a r e a p e r s o n a'));
		}
		if ($this->AREAPERSONA->delete()) {
			$this->Session->setFlash(__('A r e a p e r s o n a deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A r e a p e r s o n a was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
