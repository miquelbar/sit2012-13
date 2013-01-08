<?
App::uses('Helper', 'View', 'AppHelper');
class PaginasHelper extends AppHelper {
	
	var $helpers = array('Html','Form');
	
	function makeRowCrud($id, $paginator) {
		
		
		return $this->output($ver.$editar.$eliminar);
	
	}
	
	
}
