<?php
App::uses('AppController', 'Controller');
App::uses('GoogleChart', '');
App::uses('GooglePieChart', '');
/**
 * USUARIOs Controller
 *
 * @property USUARIO $USUARIO
 */
class USUARIOsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
	var $paginate = array(
        'limit' => 5,
        'order' => array(
            'USUARIO.id' => 'DESC'
        )
    );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		$this->USUARIO->recursive = 0;
		$this->set('uSUARIOs', $this->paginate());
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
		
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		
		$chart = new GooglePieChart('tst');
		//$chart->addColumn(GoogleChart::TYPE_STRING, 'Prueba');
		//$chart->addColumn(GoogleChart::TYPE_NUMBER, 'Valor');
		$chart->addRow(array('Prueba', 10));
		$chart->addRow(array('Otro', 50));
		$chart->addRow(array('Potro', 10));
		$chart->setTitle('Pie Chart');
		//$chart->setOption('test', 10);
		//$chart->setOption('test2', 'str');
		$this->set('test', $chart->render());
		$this->set('uSUARIO', $this->USUARIO->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->USUARIO->create();
			if ($this->USUARIO->save($this->request->data)) {
				$this->Session->setFlash(__('The u s u a r i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The u s u a r i o could not be saved. Please, try again.'));
			}
		}
		$personas = $this->USUARIO->Persona->find('list');
		$pERFILs = $this->USUARIO->PERFIL->find('list');
		$this->set(compact('personas', 'pERFILs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//print_r($this->request->data);die();
			if ($this->USUARIO->save($this->request->data)) {
				$this->Session->setFlash(__('The u s u a r i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The u s u a r i o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->USUARIO->read(null, $id);
		}
		$personas = $this->USUARIO->Persona->find('list');
		$pERFILs = $this->USUARIO->PERFIL->find('list');
		$this->set(compact('personas', 'pERFILs'));
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
		$this->set('puedeEditar', in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles']));
		if (!in_array(AppController::ID_PERFIL_ADMINISTRADOR,$this->usuario['perfiles'])){
			$this->Session->setFlash(__('No tiene acceso a esa zona.'));
			$this->redirect('/');
		}
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		if ($this->USUARIO->delete()) {
			$this->Session->setFlash(__('U s u a r i o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('U s u a r i o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->USUARIO->recursive = 0;
		$this->set('uSUARIOs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		$this->set('uSUARIO', $this->USUARIO->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->USUARIO->create();
			if ($this->USUARIO->save($this->request->data)) {
				$this->Session->setFlash(__('The u s u a r i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The u s u a r i o could not be saved. Please, try again.'));
			}
		}
		$personas = $this->USUARIO->Persona->find('list');
		$pERFILs = $this->USUARIO->PERFIL->find('list');
		$this->set(compact('personas', 'pERFILs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->USUARIO->save($this->request->data)) {
				$this->Session->setFlash(__('The u s u a r i o has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The u s u a r i o could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->USUARIO->read(null, $id);
		}
		$personas = $this->USUARIO->Persona->find('list');
		$pERFILs = $this->USUARIO->PERFIL->find('list');
		$this->set(compact('personas', 'pERFILs'));
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
		$this->USUARIO->id = $id;
		if (!$this->USUARIO->exists()) {
			throw new NotFoundException(__('Invalid u s u a r i o'));
		}
		if ($this->USUARIO->delete()) {
			$this->Session->setFlash(__('U s u a r i o deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('U s u a r i o was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
