<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');
App::uses('RepasaConstants', '');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	 /*var $components = array(
		'Auth' => array(
			'loginAction' => array(
				'controller' => 'login', 
				'action' => 'login'
			),
			'loginRedirect' => array(
				'controller' => 'usuario', 
				'action' => 'perfil'
			),
			'logoutRedirect' => '/',
			'loginError' => 'No username and password was found with that combination.',
			'authenticate' => array(
				'all' => array(
					'userModel' => 'Usuario',
					'fields' => array(
						'username' => 'email_usu', 
						'password' => 'password_usu'
					),
				),
				'Form'
			)
		), 
		'Acl',
		'Session'
	);
	*/
	
	var $helpers = array('CrudActions');
	
	protected $usuario;
	
	function beforeRender() {
	
		App::uses('Navigation', '');
		//iniciar array de navegacio
		$listaNav = array(
			'topbar' => array(
			 
				array(
					'titulo' => 'Inicio'
					,'url' => '/'
					,'rol' => 0
				),
				array(
					array(
						'titulo' => 'Login'
						,'url'=> '/login/login/'
						,'rol' => 0
					),
					array(
						'titulo' => 'Logout'
						,'url'=> '/login/logout/'
						,'rol' => 0
					)
				)
			),
			
			'footer' => array(
				array(
					'titulo' => 'Como funciona'
					,'url'=> '/login/logout/'
					,'rol' => 0
				),
				array(
					'titulo' => 'Política de privacidad'
					,'url'=> '/login/logout/'
					,'rol' => 0
				),
				array(
					'titulo' => 'Términos y condiciones'
					,'url'=> '/login/logout/'
					,'rol' => 0
				),
				array(
					'titulo' => 'Legal'
					,'url'=> '/login/logout/'
					,'rol' => 0
				),
				array(
					'titulo' => 'Contacto'
					,'url'=> '/login/logout/'
					,'rol' => 0
				),
				array(
					'titulo' => 'Blog'
					,'url'=> '/login/logout/'
					,'rol' => 0
				)
			),
			
		);
		
		
		$nav = new Navigation($listaNav);
		$nav->setRol(0);
		$this->set('navigation', $nav);
		$this->set('requested','/'.$this->params['controller'].'/'.$this->params['action'].'/');
	}
	
	function beforeFilter() { 
		//	Security::setHash('md5');
		
		//Antes de renderizar la vista todas las paginas necesitan al usuario
		/*$usuario = $this->Auth->user();
		if (isset($usuario)){
			$usua	io['credito'] = $usuario['credito_recarga_usu'] + $usuario['credito_invitaciones_usu'];
	    	$this->set('usuario', $usuario);
			$this->usuario = $usuario;
		}*/
	}
	

}
