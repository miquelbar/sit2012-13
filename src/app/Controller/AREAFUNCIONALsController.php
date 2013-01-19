<?php
App::uses('AppController', 'Controller');
/**
 * AREAFUNCIONALs Controller
 *
 * @property AREAFUNCIONAL $AREAFUNCIONAL
 */
class AREAFUNCIONALsController extends AppController {

	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'AREAFUNCIONAL.id' => 'DESC'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		$this->AREAFUNCIONAL->recursive = 0;
		$this->set('aREAFUNCIONALs', $this->paginate());
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
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		$this->set('aREAFUNCIONAL', $this->AREAFUNCIONAL->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles']));
		if ($this->request->is('post')) {
			$this->AREAFUNCIONAL->create();
			if ($this->AREAFUNCIONAL->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l could not be saved. Please, try again.'));
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
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AREAFUNCIONAL->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AREAFUNCIONAL->read(null, $id);
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
		if (!in_array(AppController::ID_PERFIL_CIO,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		if ($this->AREAFUNCIONAL->delete()) {
			$this->Session->setFlash(__('A r e a f u n c i o n a l deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A r e a f u n c i o n a l was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AREAFUNCIONAL->recursive = 0;
		$this->set('aREAFUNCIONALs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		$this->set('aREAFUNCIONAL', $this->AREAFUNCIONAL->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AREAFUNCIONAL->create();
			if ($this->AREAFUNCIONAL->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l could not be saved. Please, try again.'));
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
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AREAFUNCIONAL->save($this->request->data)) {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The a r e a f u n c i o n a l could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AREAFUNCIONAL->read(null, $id);
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
		$this->AREAFUNCIONAL->id = $id;
		if (!$this->AREAFUNCIONAL->exists()) {
			throw new NotFoundException(__('Invalid a r e a f u n c i o n a l'));
		}
		if ($this->AREAFUNCIONAL->delete()) {
			$this->Session->setFlash(__('A r e a f u n c i o n a l deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A r e a f u n c i o n a l was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
