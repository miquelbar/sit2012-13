<?

class GoogleHistograma extends GoogleChart {
	
	protected $type = 'AreaChart';
	
	public function setCabecera($cabeceras){
		foreach ($cabeceras as $key => $value) {
			$type = ($key==0) ? parent::TYPE_STRING : parent::TYPE_NUMBER;
			$this->addColumn($type, $key);
		}
	}
	
	public function setData($data){
		foreach ($data as $key => $value) {
			$this->addRow($value);
		}
	}
	
}
	