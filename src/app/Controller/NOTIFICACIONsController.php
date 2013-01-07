<?php
App::uses('AppController', 'Controller');
/**
 * NOTIFICACIONs Controller
 *
 * @property NOTIFICACION $NOTIFICACION
 */
class NOTIFICACIONsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NOTIFICACION->recursive = 0;
		$this->set('nOTIFICACIONs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		$this->set('nOTIFICACION', $this->NOTIFICACION->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NOTIFICACION->create();
			if ($this->NOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		}
		$personas = $this->NOTIFICACION->Persona->find('list');
		$tipoNotificacions = $this->NOTIFICACION->TipoNotificacion->find('list');
		$tIPOs = $this->NOTIFICACION->TIPO->find('list');
		$this->set(compact('personas', 'tipoNotificacions', 'tIPOs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->NOTIFICACION->read(null, $id);
		}
		$personas = $this->NOTIFICACION->Persona->find('list');
		$tipoNotificacions = $this->NOTIFICACION->TipoNotificacion->find('list');
		$tIPOs = $this->NOTIFICACION->TIPO->find('list');
		$this->set(compact('personas', 'tipoNotificacions', 'tIPOs'));
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
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		if ($this->NOTIFICACION->delete()) {
			$this->Session->setFlash(__('N o t i f i c a c i o n deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('N o t i f i c a c i o n was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->NOTIFICACION->recursive = 0;
		$this->set('nOTIFICACIONs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		$this->set('nOTIFICACION', $this->NOTIFICACION->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->NOTIFICACION->create();
			if ($this->NOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		}
		$personas = $this->NOTIFICACION->Persona->find('list');
		$tipoNotificacions = $this->NOTIFICACION->TipoNotificacion->find('list');
		$tIPOs = $this->NOTIFICACION->TIPO->find('list');
		$this->set(compact('personas', 'tipoNotificacions', 'tIPOs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NOTIFICACION->save($this->request->data)) {
				$this->Session->setFlash(__('The n o t i f i c a c i o n has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The n o t i f i c a c i o n could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->NOTIFICACION->read(null, $id);
		}
		$personas = $this->NOTIFICACION->Persona->find('list');
		$tipoNotificacions = $this->NOTIFICACION->TipoNotificacion->find('list');
		$tIPOs = $this->NOTIFICACION->TIPO->find('list');
		$this->set(compact('personas', 'tipoNotificacions', 'tIPOs'));
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
		$this->NOTIFICACION->id = $id;
		if (!$this->NOTIFICACION->exists()) {
			throw new NotFoundException(__('Invalid n o t i f i c a c i o n'));
		}
		if ($this->NOTIFICACION->delete()) {
			$this->Session->setFlash(__('N o t i f i c a c i o n deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('N o t i f i c a c i o n was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
