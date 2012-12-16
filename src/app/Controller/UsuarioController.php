<?php 

App::uses('AppController', 'Controller');
class UsuarioController extends AppController {
	
	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Usuario';
	
	public $uses = array('Usuario', 'Persona');

	public function login(){
		
	}
	
	public function registro(){
		//si es una petición por post
		if ($this->request->is('post')) {
			//crear las filas en los modelos
			$this->Usuario->create();
			$this->Persona->create();
			$data = $this->request->data;
			//Cifrar el password
			$data['password_usu'] = Security::hash($data['password_usu'],null,true);
			//Guardar el usuario y la persona a partir de los datos, 
			//se establece que los parámetros de la petición ya vienen con el nombre adecuado
			if ($this->Persona->save($data)) {
				//Si no hay error, pasar al indice con un mensaje que se pasa a la siguiente vista
				$this->Session->setFlash(__('El usuario se ha registrado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				//Si hay error, quedarnos en la accion y pasar los errores
				$this->set('errores', $this->ModelName->invalidFields());
			}
			
			//Meter el id de la persona en los datos para guardar el usuario
			$data[]
			if ($this->Usuario->save($data)) {
				//Si no hay error, pasar al indice con un mensaje que se pasa a la siguiente vista
				$this->Session->setFlash(__('El usuario se ha registrado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				//Si hay error, quedarnos en la accion y pasar los errores
				$this->set('errores', $this->ModelName->invalidFields());
			}

		} 
	}
}