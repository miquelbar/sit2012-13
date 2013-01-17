<?
App::uses('Helper', 'View', 'AppHelper');
class CrudActionsHelper extends AppHelper {
	
	var $helpers = array('Html','Form');
	
	function makeRowCrud($id, $canEdit=true) {
		
		$ver = $this->Html->link(__('Ver'), array('action' => 'view', $id),array('class' => 'btn btn-success'));
		if ($canEdit){
			$editar = $this->Html->link(__('Editar'), array('action' => 'edit', $id),array('class' =>'btn btn-warning'));
			$eliminar = $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $id), array('class' =>'btn btn-danger'), __('Estás seguro de que lo quieres eliminar el registro # %s?', $id));
		} else{
			$editar = '';
			$eliminar = '';
		}
		return $this->output($ver.$editar.$eliminar);
	
	}
	
	
}
