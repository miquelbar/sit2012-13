<?php
/**
 * Clase para dibujar un menú de navegación
 * NOTAS: Debería implementarse como helper de la vista.
 */
class Navigation {
	
	protected $list;
	public static $rol = 0;
	
	//Atributos de estilo
	
	protected $activeClass = 'active';
	protected $liClass = ''; 
	
	public function __construct($list){
		$this->list = $list;
	}
	
	/**
	 * Dibuja el menú de navegación.
	 * Lo genera como una series de li, añade la clase active al elemento activo.
	 */
	public function renderList($list, $current){
		foreach ($list as $key => $enlace) {
			
			//Si es un array cogemos el enlace asociado exactamente asociado a este rol
			if (is_array($enlace) && !isset($enlace['rol'])) {
				$enlace = $this->obtenerEnlaceRol($enlace, self::$rol);			
			}
			
			//dibujar solo si es del rol adecuado
			if ($enlace['rol'] <= self::$rol){
				$selected = '';
				if ($current == $enlace['url']){
					$selected = $this->activeClass;				
				}
				
				echo '<li class="'.$this->liClass.' '.$selected.'"><a href="'.$enlace['url'].'">'.$enlace['titulo'].'</a></li>';
			}	
		}
		
	}
	
	public function render($current){
		$this->renderList($this->list, $current);
	}
	
	public function renderSubTree($raiz, $current){
		$this->renderList($this->list[$raiz], $current);
	}
	
	/**
	 * Establece las clases que llevará la página activa y los elementos lis.
	 * @param string $activeClass Clase que se asignará al elemento li que esté activo en la navegación.
	 * @param string $liClass Clase que se asignará a todos los elemnetos li.
	 */
	public function setStyle($activeClass, $liClass){
		$this->activeClass = $activeClass;
		$this->liClass = $liClass;
	}
	
	/**
	 * Establece el rol del navigation
	 * @param integer Nuevo rol
	 */
	public function setRol($rol){
		self::$rol = $rol;
	}
	
	/**
	 * Dada una lista de enlaces devuelve el primer enlace con el rol pasado por parámetro.
	 * @param array $listEnlaces Lista de enlaces.
	 * @param integer $rol Rol del usuario.
	 */
	public function obtenerEnlaceRol($listEnlaces, $rol){
			
		foreach ($listEnlaces as $key => $value) {
			if ($value['rol'] == $rol){
				return $value;
			}
		}
		
	}
}
