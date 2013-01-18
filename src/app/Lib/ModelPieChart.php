<?

class ModelPieChart extends ModelChart{
	
	protected $chart;
	protected $chartField;
	protected $fieldDict;
	
	public function __construct($model, $id){
		parent::__construct($model, $id);
		
	}
	
	public function buildForFieldGrouped($valueField, $groupField, $where=null){
		$this->chart = new GooglePieChart($this->id.'_'.$valueField);
		$this->chart->setTitle($this->title);
		
		$stats = $this->obtainData($valueField, $groupField, $where);
		foreach ($stats as $campo => $valor) {
			$this->chart->newRow($this->getFieldValue($campo), $valor);
		}
		
	}
	
	public function renderContainer(){
		return $this->chart->renderContainer();
	}
	
	public function renderChart(){
		return $this->chart->render();
	}
	
	public function obtainData($valueField, $countField, $where=null){
		//Obtener estadísticas por estado
		$modelName = get_class($this->model);
		$select = array(
			'fields' => array('COUNT('.$modelName.'.'.$countField.')', $valueField),
			'group' => $valueField
		);
		
		if ($where != null){
			$select['conditions'] = $where;
		}
		
		$data = $this->model->find('all', $select);
		$stats = array();
		foreach ($data as $key => $value) {
			$campo = $value[$modelName][$valueField];
			$valor = array_pop($value[0]);
			$stats[$campo] = intval($valor);
		}
		return $stats;
	}
	
	public function getFieldValue($value){
		if ($this->fieldDict != null){
			return $this->fieldDict[$value];
		} else {
			
			return is_string($value) ? $value : "".$value;
		}
	}
	
	public function setFieldDict($dict){
		$this->fieldDict = $dict;
	}
	
}
