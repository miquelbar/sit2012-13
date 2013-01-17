<?

class ModelHistogramChart extends ModelChart{
	
	protected $chart;
	protected $chartField;
	protected $fieldDict;
	
	public function __construct($model, $id){
		parent::__construct($model, $id);
		
	}
	
	public function buildForFieldGrouped($valueField, $groupField, $where=null){
		$this->chart = new GoogleHistograma($this->id.'_'.$valueField);
		$this->chart->setTitle($this->title);
		$this->chart->addColumn(GoogleChart::TYPE_STRING, $groupField);
		$this->chart->addColumn(GoogleChart::TYPE_NUMBER, $valueField);
		$stats = $this->obtainData($valueField, $groupField, $where);
		foreach ($stats as $campo => $valor) {
			$this->chart->addRow(array($this->getFieldValue($campo), $valor));
		}
		
	}
	
	public function renderContainer(){
		return $this->chart->renderContainer();
	}
	
	public function renderChart(){
		return $this->chart->render();
	}
	
	public function obtainData($valueField, $groupField, $where=null){
		//Obtener estadísticas por estado
		$modelName = get_class($this->model);
		$select = array(
			'fields' => array($groupField,$valueField),
			'group' => $groupField
		);
		
		if ($where != null){
			$select['conditions'] = $where;
		}
		
		$data = $this->model->find('all', $select);
		$stats = array();
		foreach ($data as $key => $value) {
			$campo = $value[$modelName][$groupField];
			$valor = $value[$modelName][$valueField];
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
