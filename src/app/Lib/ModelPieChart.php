<?

class ModelPieChart extends ModelChart{
	
	protected $chart;
	protected $chartField;
	protected $fieldDict;
	
	public function __construct($model, $id){
		parent::__construct($model, $id);
		
	}
	
	public function buildForFieldGrouped($valueField, $groupField){
		$this->chart = new GooglePieChart($this->id.'_'.$valueField);
		$this->chart->setTitle($this->title);
		
		$stats = $this->obtainData($valueField, $groupField);
		
		foreach ($stats as $campo => $valor) {
			$this->chart->addRow($this->getFieldValue($campo), $valor);
		}
		
	}
	
	public function renderContainer(){
		return $this->chart->renderContainer();
	}
	
	public function renderChart(){
		return $this->chart->render();
	}
	
	public function obtainData($valueField, $countField){
		//Obtener estadísticas por estado
		$modelName = get_class($this->model);
		$select = array(
			'fields' => array('COUNT('.$modelName.'.'.$countField.')', $valueField),
			'group' => $valueField
		);
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
